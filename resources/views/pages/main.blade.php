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
                        <div id="tile7" class="tile tile-big">

                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="slide-badge">Testść</div>
                                        <h3 class="tilecaption">Text teadasdasdsd</h3>
                                        <img src="http://handsontek.net/demoimages/tiles/gallery.png"
                                             class="img-responsive"/>
                                    </div>
                                    <div class="item">
                                        <div class="slide-badge bottom">Test</div>
                                        <img src="http://handsontek.net/demoimages/tiles/gallery2.png"
                                             class="img-responsive"/>
                                    </div>
                                    <div class="item">
                                        <div class="slide-badge">Test</div>
                                        <img src="http://handsontek.net/demoimages/tiles/gallery3.png"
                                             class="img-responsive"/>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col col-sm-6 col-xs-12">
                        <div id="tile9" class="tile tile-big">

                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="slide-badge">Test</div>
                                        <img src="http://handsontek.net/demoimages/tiles/music.png"
                                             class="img-responsive"/>
                                    </div>
                                    <div class="item">
                                        <div class="slide-badge">Test</div>
                                        <img src="http://handsontek.net/demoimages/tiles/music2.png"
                                             class="img-responsive"/>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col col-sm-6 col-xs-12">
                        <div id="tile1" class="tile tile-small">

                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="slide-badge">Test</div>
                                        <img src="http://handsontek.net/demoimages/tiles/twitter1.png"
                                             class="img-responsive"/>
                                    </div>
                                    <div class="item">
                                        <div class="slide-badge bottom">Test</div>
                                        <img src="http://handsontek.net/demoimages/tiles/twitter2.png"
                                             class="img-responsive"/>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col col-sm-6 col-xs-12">
                        <div id="tile2" class="tile tile-small">

                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="http://handsontek.net/demoimages/tiles/hot.png"
                                             class="img-responsive"/>
                                    </div>
                                    <div class="item">
                                        <img src="http://handsontek.net/demoimages/tiles/hot2.png"
                                             class="img-responsive"/>
                                    </div>
                                    <div class="item">
                                        <img src="http://handsontek.net/demoimages/tiles/hot3.png"
                                             class="img-responsive"/>
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
                            {!! Form::open(['url' => '#', 'method' => 'post']) !!}
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
                                        <div class="col-xs-10">{{Form::label('agree1', 'Zgoda na gromadzenie i przetwarzanie danych osobowych Regulamin', ['class' => 'control-label small'])}}</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-10 col-md-12 center-block">
                                        <div class="col-xs-1">{{Form::checkbox('agree2', 'agree1')}}</div>
                                        <div class="col-xs-10">{{Form::label('agree2', 'Zgoda na otrzymywanie informacji handlowych Regulamin', ['class' => 'control-label small'])}}</div>
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