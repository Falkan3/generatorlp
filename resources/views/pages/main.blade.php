@extends($layout)
@section('title')
    Nieruchomości | NegocjujemyPromocje
@stop

@section('content')
    <div class="content">
        <div class="container dynamicTile">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 tiles">
                    <div class="col col-sm-6 col-xs-12">
                        <div class="tile tile-big slow">

                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active"
                                         style="background-image: url('http://abaco.net.pl/wp-content/uploads/2015/10/slide1.jpg')">
                                        <div class="slide-badge">Wyróżnione</div>
                                        <div class="slide-badge bottom"><a href=".contact-form" class="page-scroll">Formularz</a></div>
                                        <img class="slide-logo" src="http://bosque-creative.pl/projekty/demo4/wp-content/uploads/2015/11/logo-www.png" />
                                        <div class="tilecaption-box">
                                            <div class="tilecaption">
                                                <h3>Biuro Rachunkowe ABACO</h3>
                                                <a href="http://abaco.net.pl/" target="_blank">http://abaco.net.pl/</a>
                                                <ul>
                                                    <li>50% zniżki na usługi przez pierwsze 3 m-ce dla nowych firm</li>
                                                    <li>50 zniżki na 1 m-c dla firm zmieniających biuro rach.</li>
                                                    <li>24/h dostęp do dokumentów online</li>
                                                    <li>gratis program do wystawiania faktur</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="b-overlay"></div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col col-sm-6 col-xs-12">
                        <div class="tile tile-big fast">

                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active"
                                         style="background-image: url('http://abaco.net.pl/wp-content/uploads/2015/11/slide2.jpg')">
                                        <div class="slide-badge">Wyróżnione</div>
                                        <div class="slide-badge bottom"><a href=".contact-form" class="page-scroll">Formularz</a></div>
                                        <div class="tilecaption-box">
                                            <div class="tilecaption">
                                                <h3>Biuro Usł. Rach.-Audyt. Grażyna Łukjanow</h3>
                                                <a href="#"></a>
                                                <ul>
                                                    <li>50% zniżki przez pierwsze 3 m-ce</li>
                                                    <li>gratis prowadzenie kadr przez 6 m-cy (nowi klienci)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="b-overlay"></div>
                                    </div>

                                    <div class="item"
                                         style="background-image: url('http://abaco.net.pl/wp-content/uploads/2015/11/slide5.jpg')">
                                        <div class="slide-badge">Wyróżnione</div>
                                        <div class="slide-badge bottom"><a href=".contact-form" class="page-scroll">Formularz</a></div>
                                        <img class="slide-logo" src="http://www.phuas.pl/uploads/9/0/1/5/90154401/logo-2.jpg" />
                                        <div class="tilecaption-box">
                                            <div class="tilecaption">
                                                <h3>Biuro Rachunkowe ABACO</h3>
                                                <a href="http://www.phuas.pl/#section_7" target="_blank">http://www.phuas.pl/</a>
                                                <ul>
                                                    <li>indywidualne podejście do klienta</li>
                                                    <li>odbiór dokumentów od klienta</li>
                                                    <li>wsparcie w strategii podatkowej</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="b-overlay"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col col-sm-6 col-xs-12">
                        <div class="tile tile-big">

                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active"
                                         style="background-image: url('http://www.phuas.pl/uploads/9/0/1/5/90154401/7_1.jpg')">
                                        <div class="tilecaption-box">
                                            <div class="slide-badge bottom"><a href=".contact-form" class="page-scroll">Formularz</a></div>
                                            <img class="slide-logo" src="{{asset('user_photos/admin/Photos/8a334804169251031d227794d07f72ae.png')}}" />
                                            <div class="tilecaption">
                                                <h3>Pomorskie Biuro Rachunkowe Sp. z o.o.</h3>
                                                <a href="http://pomorskiebiurorachunkowe.pl/" target="_blank">http://pomorskiebiurorachunkowe.pl/</a>
                                                <ul>
                                                    <li>30% zniżki przez pierwsze trzy m-ce</li>
                                                    <li>odbiór dokumentów od klienta</li>
                                                    <li>pomoc przy założeniu działalności</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="b-overlay"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col col-sm-6 col-xs-12">
                        <div class="tile tile-big">

                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active"
                                         style="background-image: url('http://abaco.net.pl/wp-content/uploads/2015/11/slide3.jpg')">
                                        <div class="slide-badge bottom"><a href=".contact-form" class="page-scroll">Formularz</a></div>
                                        <div class="tilecaption-box">
                                            <img class="slide-logo" src="http://virtus-gdansk.pl/images/header_decorator.jpg" />
                                            <div class="tilecaption">
                                                <h3>Biuro Rachunkowe VIRTUS Monika Wojciechowska</h3>
                                                <a href="http://virtus-gdansk.pl/" target="_blank">http://virtus-gdansk.pl/</a>
                                                <ul>
                                                    <li>50% zniżki na usługi przez pierwsze 3 m-ce</li>
                                                    <li>odbiór dokumentów od klienta</li>
                                                    <li>wsparcie pośrednika finansowego oraz BHP</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="b-overlay"></div>
                                    </div>
                                    <div class="item"
                                         style="background-image: url('http://abaco.net.pl/wp-content/uploads/2015/11/slide6.jpg')">
                                        <div class="slide-badge bottom"><a href=".contact-form" class="page-scroll">Formularz</a></div>
                                        <div class="tilecaption-box">
                                            <div class="tilecaption">
                                                <h3>Anita Podgórska Biuro Rachunkowe</h3>
                                                <a href="#"></a>
                                                <ul>
                                                    <li>20% zniżki przez pierwsze 3 m-ce</li>
                                                    <li>odbiór dokumentów od klienta</li>
                                                    <li>doradztwo podatkowe</li>
                                                    <li>reprezentacja klienta podczas kontroli podatkowej</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="b-overlay"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 contact-form">
                    <div>
                        <h1><span class="text-bold">Wypełnij formularz</span></h1>

                        <div class="padding-medium">
                            {!! Form::open(['url' => '#', 'method' => 'post', 'id' => 'contact-form']) !!}
                            <div class="col-sm-10 center-block">
                                <a href="#" data-toggle="tooltip" data-placement="left"
                                   title="Wpisz poprawne imię">{{Form::text('imie', '', ['class' => "contact-form-field", 'placeholder' => 'Imię'])}}</a>
                            </div>

                            <div class="col-sm-10 center-block">
                                <a href="#" data-toggle="tooltip" data-placement="left"
                                   title="Wpisz poprawny numer telefonu">{{Form::text('telefon', '', ['class' => "contact-form-field", 'placeholder' => 'Numer telefonu'])}}</a>
                            </div>

                            <div class="col-sm-10 center-block">
                                {{Form::submit('CHCĘ SKORZYSTAĆ', ['class' => "btn"])}}
                            </div>

                            <div class="text-left padding-small">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-10 col-md-12 center-block">
                                        <div class="col-xs-1">{{Form::checkbox('agree1', 'agree1')}}</div>
                                        <div class="col-xs-10">{{Form::label('agree1', 'Zgoda na gromadzenie i przetwarzanie danych osobowych', ['class' => 'control-label small'])}}</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-10 col-md-12 center-block">
                                        <div class="col-xs-1">{{Form::checkbox('agree2', 'agree1')}}</div>
                                        <div class="col-xs-10">{{Form::label('agree2', 'Zgoda na otrzymywanie informacji handlowych', ['class' => 'control-label small'])}}</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-10 col-md-12 center-block">
                                        <div class="col-xs-1">{{Form::checkbox('agree3', 'agree1')}}</div>
                                        <div class="col-xs-10">{{Form::label('agree3', 'Zgoda na używanie telekomunikacyjnych urządzeń końcowych', ['class' => 'control-label small'])}}</div>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}

                            <div class="row">
                                <div class="col-xs-12 col-sm-6 text-center">
                                    <a href="https://rachunkowosc.negocjujemypromocje.pl/polityka-prywatnosci"
                                       class="link left" target="_blank">Polityka prywatności</a>
                                </div>
                                <div class="col-xs-12 col-sm-6 text-center">
                                    <a href="https://rachunkowosc.negocjujemypromocje.pl/polityka-prywatnosci"
                                       class="link right" target="_blank">Polityka cookies</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-xs-12">


                </div>
            </div>

        </div>
    </div>
@stop

<?php /*
    <?php echo app()->getLocale(); ?>
    <a href="{{url('test')}}">AAA</a>

 <div class="col-sm-4 col-xs-12">
                        <div id="tile10" class="tile">

                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <h3 class="tilecaption"><i class="fa fa-child fa-4x"></i></h3>
                                    </div>
                                    <div class="item">
                                        <h3 class="tilecaption">Customize your tiles</h3>
                                    </div>
                                    <div class="item">
                                        <h3 class="tilecaption">Text, Icons, Images</h3>
                                    </div>
                                    <div class="item">
                                        <h3 class="tilecaption">Combine them and create your metro style</h3>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

    <div class="col-sm-2 col-xs-4">
                <div id="tile8" class="tile">

                    <div class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="http://handsontek.net/demoimages/tiles/music.png" class="img-responsive"/>
                            </div>
                            <div class="item">
                                <img src="http://handsontek.net/demoimages/tiles/music2.png" class="img-responsive"/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-2 col-xs-4">
                <div id="tile9" class="tile">

                    <div class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="http://handsontek.net/demoimages/tiles/calendar.png" class="img-responsive"/>
                            </div>
                            <div class="item">
                                <img src="http://handsontek.net/demoimages/tiles/calendar2.png" class="img-responsive"/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
 */
?>