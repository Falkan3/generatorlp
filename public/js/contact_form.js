$(document).ready(function() {
    var form = $("form#contact-form");
    var status = $("#status");
    var status_text = $("#status p");
    var imie_error_status = $("#imie_status");
    var imie_error_status_text = imie_error_status.find('p');
    var tel_error_status = $("#tel_status");
    var tel_error_status_text = tel_error_status.find('p');
    var imie= $("form#contact-form [name='imie']");
    var nrtelefonu= $("form#contact-form [name='telefon']");
    var url = $("form#contact-form").attr("action");
    var loading_gif = $("#loading_ajax");
    var checkboxes = $("form#contact-form input[type='checkbox']");

    $(document)
        .ajaxStart(function () {
            loading_gif.removeClass("hidden");
        })
        .ajaxStop(function () {
            loading_gif.addClass("hidden");
        });

    form.submit(function(e) {
        e.preventDefault();

        //var formdata = form.serialize();//new FormData(form);
        //var formdata = new FormData(document.getElementById('email_form'));
        var formdata = $("form#contact-form").serialize();

        status_text.html("");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                'X-Requested-With': 'XMLHttpRequest'
            }
        });
        $.ajax({
            url: url,//form.attr('action'),
            type: "POST",
            data: formdata,
            enctype:'multipart/form-data',
            dataType : 'json',
            processData: false,
            success: function(data){
                status_text.html("");
                status.addClass("error-text");
                for (var index in data.message){
                    // you can show both index and value to know how the array is indexed in javascript (but it should be the same way it was in the php script)
                    status_text.append("<p>" + data.message[index]+'</p>');
                }
                /*
                 for (var index in data.message){
                 // you can show both index and value to know how the array is indexed in javascript (but it should be the same way it was in the php script)
                 status.append("<p>" + data.message[index]+'</p>');
                 }
                 */
                if (data != null && data.success) {
                    //status.html('<p>' + data['message'] + '</p>');
                    //form.reset();
                    //form[0].reset();

                    //status.removeClass("alert-danger");
                    //status.addClass("alert-success");
                    imie.val("");
                    nrtelefonu.val("");
                    imie.removeClass("wrong_input");
                    imie.removeClass("correct_input");
                    nrtelefonu.removeClass("wrong_input");
                    nrtelefonu.removeClass("correct_input");
                    status.removeClass("error-text");
                }
                else
                {
                    //status.removeClass("alert-success");
                    //status.addClass("alert-danger");
                }
                status.removeClass("hidden");
            },
            error: function(data){
                // Error...
                //status.removeClass("alert-success");
                //status.addClass("alert-danger");
                for (var index in data.message){
                    // you can show both index and value to know how the array is indexed in javascript (but it should be the same way it was in the php script)
                    status_text.append("<p>" + data.message[index]+'</p>');
                }
                status.addClass("error-text");
                status.removeClass("hidden");
            }
        });

    });

    //Input fields

    imie.on("blur", function() {
        if(!isName(imie.val()))
        {
            imie.removeClass("correct_input");
            imie.addClass("wrong_input");
            var error_text = 'Imię jest nieprawidłowe';
            imie_error_status.removeClass('hidden');
            imie_error_status_text.html(error_text);
        }
        else
        {
            imie.addClass("correct_input");
            imie.removeClass("wrong_input");
            imie_error_status.addClass('hidden');
        }
        if(imie.val().length==0) {
            imie.removeClass("wrong_input");
            imie.removeClass("correct_input");
            imie_error_status.addClass('hidden');
        }
    });

    nrtelefonu.on("blur", function() {
        if(nrtelefonu.val().length>0 && !isTelephoneNumber(nrtelefonu.val()))
        {
            nrtelefonu.removeClass("correct_input");
            nrtelefonu.addClass("wrong_input");
            var error_text = '';
            if(!specialChars(nrtelefonu.val()))
                error_text += 'Numer zawiera litery lub niedozwolone znaki';
            if(error_text=='')
                error_text = 'Nieprawidłowy format numeru';
            tel_error_status.removeClass('hidden');
            tel_error_status_text.html(error_text);
        }
        else
        {
            nrtelefonu.removeClass("wrong_input");
            nrtelefonu.addClass("correct_input");
            tel_error_status.addClass('hidden');
        }
        if(nrtelefonu.val().length==0) {
            nrtelefonu.removeClass("wrong_input");
            nrtelefonu.removeClass("correct_input");
            tel_error_status.addClass('hidden');
        }
    });

    //Checkboxes

    checkboxes.change(function() {
        if(!this.checked) {
            $(this).parent().parent().find("label").addClass('error-text');
        }
        else
        {
            $(this).parent().parent().find("label").removeClass('error-text');
        }
    });

    //
});

function isName(name) {
    var regex = /^([a-zA-Z])+$/;
    return regex.test(name);
}

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function isTelephoneNumber(number) {
    var isTrue=false;
    var regex = /^[0-9]{3}(-|\s)?[0-9]{3}(-|\s)?[0-9]{3}$/;
    isTrue = regex.test(number);
    if(isTrue!=1)
    {
        regex = /^[0]?([0-9]{2})(-|\s)?[0-9]{3}(-|\s)?[0-9]{2}(-|\s)?[0-9]{2}$/;
        isTrue = regex.test(number);
    }
    return regex.test(number);
}

function specialChars(input) {
    var isTrue=false;
    var regex = /^[0-9-|\s]*$/;
    isTrue = regex.test(input);

    return regex.test(input);
}