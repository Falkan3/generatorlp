<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Contact;

class FormController extends Controller
{
    private function validateMail($imie, $nrtelefonu)
    {
        $response = array();
        if (strlen($imie) > 35 || !preg_match("/^([a-zA-Z])+$/", $imie)) {
            $response[] = "Imię jest nieprawidłowe";
        }
        if (strlen($nrtelefonu) > 14 || !preg_match("/^[0-9]{3}(-|\s)?[0-9]{3}(-|\s)?[0-9]{3}$/", $nrtelefonu) && !preg_match("/^[0]?([0-9]{2})(-|\s)?[0-9]{3}(-|\s)?[0-9]{2}(-|\s)?[0-9]{2}$/", $nrtelefonu)) {
            $response[] = "Numer telefonu jest nieprawidłowy";
        }

        return $response;
    }

    public function PageOneContactForm(Request $request)
    {
        if($request->agree1 != 1 || $request->agree2 != 1 || $request->agree3 != 1)
        {
            return response()->json([
                'success' => false,
                'message' => ['Proszę zaznaczyć wszystkie zgody na przetwarzanie informacji']
            ]);
        }
        $admins = User::all();
        $imie = $request['imie'];
        $telefon = $request['telefon'];

        $subject = "Kontakt ze strony Rachunkowość | NegocjujemyPromocje.pl";

        $response = $this->validateMail($imie, $telefon);

        if (empty($response)) {
            $contact = new Contact;
            $contact->name = $imie;
            $contact->tel = $telefon;
            $contact->save();

            try {
                if (isset($admins)) {
                    foreach ($admins as $admin) {
                        Mail::queue('emails.reminder', ['imie' => $imie, 'telefon' => $telefon],
                            function ($m) use ($admin, $imie, $telefon, $subject) {
                                $m->from($admin->email, $telefon);

                                $m->to($admin->email)->subject($subject);
                            });
                    }
                }
            } catch (\Exception $ex) {

                return response()->json([
                    'success' => false,
                    'message' => [$ex->getMessage()]
                ]);

                //return redirect(App::getLocale() . '/about')->with('message', 'Message failed!');
            }

            return response()->json([
                'success' => true,
                'message' => ["Dziękujemy za przesłanie formularza - nasz konsultant skontaktuje się z Tobą na podany nr telefonu."]
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => $this->validateMail($imie, $telefon)
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => $this->validateMail($imie, $telefon)
        ]);
    }
}