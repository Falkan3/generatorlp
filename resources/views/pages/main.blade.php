@extends($layout)
@section('title')
    Nieruchomości | NegocjujemyPromocje
@stop

@section('content')
    <div class="content">
        <div class="container dynamicTile">
            <div class="row text-center">
                <h3 class="no-margin">NAJLEPSZE WYNEGOCJOWANE <span class="highlight">OFERTY PROMOCYJNE</span></h3>
                <h3 class="no-margin margin-bottom-medium"><span class="highlight big colored">TRÓJMIEJSKICH RACHUNKOWOŚCI</span>
                </h3>
                <div class="col-xs-12 col-sm-12 col-md-9 tiles">
                    <section>
                        <div class="col col-sm-12 col-xs-12">
                            <div class="tile tile-small slow">
                                <?php /*<div class="slide-badge promo">Wyróżnione</div>*/ ?>
                                <?php /*<a href=".contact-form" class="page-scroll slide-badge right">Formularz</a>*/ ?>
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="bg-pic"
                                                 style="background-image: url('http://abaco.net.pl/wp-content/uploads/2015/10/slide1.jpg')">
                                                <div class="b-overlay"></div>
                                                <div class="logo-container">
                                                    <img class="slide-logo"
                                                         src="http://bosque-creative.pl/projekty/demo4/wp-content/uploads/2015/11/logo-www.png"/>

                                                </div>
                                                <div class="widget">
                                                    <img
                                                            src="{{asset('images/np/mark1.png')}}"/>
                                                    <p>-50%</p>
                                                </div>
                                            </div>
                                            <div class="tilecaption-box">
                                                <div class="corner-ribbon top-left green shadow">-50%</div>
                                                <div class="tilecaption">
                                                    <h3>Biuro Rachunkowe ABACO</h3>
                                                    <ul>
                                                        <li>
                                                            <span class="highlight">50% zniżki na usługi rachunkowe</span>
                                                        </li>
                                                        <li><span class="greyed">oferta dotyczy pierwszych 3-m/cy i dotyczy nowych firm, lub</span>
                                                        </li>
                                                        <li><span class="greyed">50% na 1 m-c dla firm zmieniajacych biuro rachunkowe</span>
                                                        </li>
                                                        <li>
                                                            <span class="greyed">24h/7 dostęp do dokumentów online</span>
                                                        </li>
                                                        <li>
                                                            <span class="greyed">gratis program do wystawiania faktur</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a class="btn medium-btn offert" href="http://abaco.net.pl/"
                                                   target="_blank">Zobacz ofertę</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                        <div id="test" class="col-sm-12 col-xs-12 tile-description">

                        </div>
                    </section>

                    <section>
                        <div class="col col-sm-6 col-xs-12">
                            <div class="tile tile-big">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="bg-pic"
                                                 style="background-image: url('http://abaco.net.pl/wp-content/uploads/2015/10/slide1.jpg')">
                                                <div class="b-overlay"></div>
                                                <div class="logo-container">
                                                    <img class="slide-logo"
                                                         src="{{asset('user_photos/admin/Photos/8a334804169251031d227794d07f72ae.png')}}"/>
                                                </div>
                                                <div class="widget">
                                                    <img
                                                            src="{{asset('images/np/mark1.png')}}"/>
                                                    <p>-50%</p>
                                                </div>
                                            </div>
                                            <div class="tilecaption-box">
                                                <div class="tilecaption">
                                                    <h3>Pomorskie Biuro Rachunkowe Sp. z o.o.</h3>
                                                    <ul>
                                                        <li>
                                                            <span class="highlight">30% zniżki przez pierwsze trzy m-ce</span>
                                                        </li>
                                                        <li><span class="greyed">odbiór dokumentów od klienta</span>
                                                        </li>
                                                        <li>
                                                            <span class="greyed">pomoc przy założeniu działalności</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a class="btn medium-btn offert"
                                                   href="http://pomorskiebiurorachunkowe.pl/" target="_blank">Zobacz
                                                    ofertę</a>
                                            </div>
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
                                        <div class="item active">
                                            <div class="bg-pic"
                                                 style="background-image: url('http://abaco.net.pl/wp-content/uploads/2015/10/slide1.jpg')">
                                                <div class="b-overlay"></div>
                                                <div class="logo-container">
                                                    <img class="slide-logo"
                                                         src="http://virtus-gdansk.pl/images/header_decorator.jpg"/>

                                                </div>
                                            </div>
                                            <div class="tilecaption-box">
                                                <div class="tilecaption">
                                                    <h3>Biuro Rachunkowe VIRTUS Monika Wojciechowska</h3>
                                                    <ul>
                                                        <li><span class="highlight">50% zniżki na usługi przez pierwsze 3 m-ce</span>
                                                        </li>
                                                        <li><span class="greyed">odbiór dokumentów od klienta</span>
                                                        </li>
                                                        <li><span class="greyed">wsparcie pośrednika finansowego oraz BHP</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a class="btn medium-btn offert"
                                                   href="http://www.xn--virtus-gdask-ddc.pl/" target="_blank">Zobacz
                                                    ofertę</a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="bg-pic"
                                                 style="background-image: url('http://abaco.net.pl/wp-content/uploads/2015/10/slide1.jpg')">
                                                <div class="b-overlay"></div>
                                                <div class="logo-container">
                                                </div>
                                            </div>
                                            <div class="tilecaption-box">
                                                <div class="tilecaption">
                                                    <h3>Anita Podgórska Biuro Rachunkowe</h3>
                                                    <ul>
                                                        <li>
                                                            <span class="highlight">20% zniżki przez pierwsze 3 m-ce</span>
                                                        </li>
                                                        <li><span class="greyed">odbiór dokumentów od klienta</span>
                                                        </li>
                                                        <li><span class="greyed">doradztwo podatkowe</span></li>
                                                        <li><span class="greyed">reprezentacja klienta podczas kontroli podatkowej</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a class="btn medium-btn offert" href="http://podgorska.net.pl/"
                                                   target="_blank">Zobacz ofertę</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="test2" class="col-sm-12 col-xs-12 tile-description">

                        </div>
                    </section>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 contact-form">
                    <div>
                        <h1><span class="text-bold">Wypełnij formularz</span></h1>
                        <p>Zostaw numer telefonu
                            oddzwonimy BEZPŁATNIE
                            jak skorzystać z wybranej PROMOCJI</p>

                        <div class="padding-small">
                            {!! Form::open(['url' => url('form/1'), 'method' => 'post', 'id' => 'contact-form']) !!}
                            <div class="col-sm-12 center-block no-padding-desktop">
                                <div id="imie_status" class="error-text hidden no-margin text-left"><p>A</p></div>
                                <a href="#" data-toggle="tooltip" data-placement="left"
                                   title="Wpisz poprawne imię">{{Form::text('imie', '', ['class' => "contact-form-field", 'placeholder' => 'Imię'])}}</a>
                            </div>

                            <div class="col-sm-12 center-block no-padding-desktop">
                                <div id="tel_status" class="error-text hidden no-margin text-left"><p>A</p></div>
                                <a href="#" data-toggle="tooltip" data-placement="left"
                                   title="Wpisz poprawny numer telefonu (XXX-XXX-XXX)">{{Form::text('telefon', '', ['class' => "contact-form-field", 'placeholder' => 'Numer telefonu'])}}</a>
                            </div>

                            <img id="loading_ajax"
                                 src="{{URL::asset('images/dist/gears.gif')}}" alt="loading..."
                                 class="hidden centered-block"/>

                            <div id="status" class="hidden"><p></p></div>

                            <div class="col-sm-12 center-block no-padding-desktop">
                                {{Form::submit('SPRAWDŹ PROMOCJĘ', ['class' => "btn"])}}
                            </div>

                            <div class="container-fluid text-left padding-vertical-small">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-10 col-md-12 center-block no-padding">
                                        <div class="col-xs-1">{{Form::checkbox('agree1', 1, 1)}}</div>
                                        <div class="col-xs-10">{{Form::label('agree1', 'Zgoda na gromadzenie i przetwarzanie danych osobowych', ['class' => 'control-label small'])}}</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-10 col-md-12 center-block no-padding">
                                        <div class="col-xs-1">{{Form::checkbox('agree2', 1, 1)}}</div>
                                        <div class="col-xs-10">{{Form::label('agree2', 'Zgoda na otrzymywanie informacji handlowych', ['class' => 'control-label small'])}}</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-10 col-md-12 center-block no-padding">
                                        <div class="col-xs-1">{{Form::checkbox('agree3', 1, 1)}}</div>
                                        <div class="col-xs-10">{{Form::label('agree3', 'Zgoda na używanie telekomunikacyjnych urządzeń końcowych', ['class' => 'control-label small'])}}</div>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}

                            <div class="row">
                                <div class="col-xs-6 text-center">
                                    <a href="https://rachunkowosc.negocjujemypromocje.pl/polityka-prywatnosci"
                                       class="link left" target="_blank">Polityka prywatności</a>
                                </div>
                                <div class="col-xs-6 text-center">
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

            <a href=".contact-form" class="page-scroll"><img src="{{asset('images/dist/form-icon.png')}}"
                                                             class="form-icon" alt="formularz" /></a>
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