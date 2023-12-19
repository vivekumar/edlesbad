@extends('frontend/layout/layout')
@section('page_title', 'Admin Dashboard')
@section('container')
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/about.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner">
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="{{url('/')}}">Home</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                            <span class="breadcrumb-item active">über uns</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="htc__product__grid bg__white ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; padding: 20px;">
                    <h5 class="bg-info-subtle">Sorry; - Sie müssten auf die Titel im Dropdown-Menu klicken...</h5>
                    <br>
                    <br>
                    <p>Aber hier gehts (alternativ) auch weiter... ;-)</p>
                    <br>
                    <ul class="about-ulli">
                        <li><span><a href="https://www.edlesbad.ch/de/ueber-uns-edlesbad.ch/ueber-uns">Über uns</a></span></li>
                        <li><span><a href="https://www.edlesbad.ch/de/ueber-uns-edlesbad.ch/oeffnungszeiten-edlesbad">Öffnungszeiten</a></span></li>
                        <li><span><a href="https://www.edlesbad.ch/de/ueber-uns-edlesbad.ch/so-finden-sie-uns">So finden Sie uns</a></span></li>
                        <li><span><a href="https://www.edlesbad.ch/de/ueber-uns-edlesbad.ch/badausstellug-edles-bad">Badausstellung Bilder</a></span></li>
                        <li><span><a href="https://www.edlesbad.ch/de/ueber-uns-edlesbad.ch/leitbild-edlesbad">Leitbild</a></span></li>
                        <li><span><a href="https://www.edlesbad.ch/de/ueber-uns-edlesbad.ch/kontakt">Kontakt</a></span></li>
                        <li><span><a href="https://www.edlesbad.ch/de/ueber-uns-edlesbad.ch/soziales-engagement">Soziales Engagement</a></span></li>
                        <li><span><a href="https://www.facebook.com/Edlesbad/">Facebook Blog</a></span></li>

                    </ul>
                    <hr>
                    <h5 class="text-center mt-3 mb-3"><strong>Über uns:</strong></h5>
                    <div class="row" style="align-items: center;">
                        <div class="col-md-7">


                            <p class="mt-3">Edles Bad GmbH ist ein Vollausrüster und bietet all jene Produkte an, welches ein schönes Badezimmer ausmachen.<br>
                                <br>
                                Wir sind schweizweit der grösste Lieferant von freistehende Badewannen und Becken in Steinguss.
                            </p>
                            <p><br>
                            <p>Gleichzeitig sind wir spezialisiert auf moderne ultraflache Duschböden in verschiedenen Materialien.</p>
                            <br>
                            <p>Als wichtiger Nischenplayer führen wir das Schweizweit grösste Angebot an Klassischen Badmaterialien (Retro-Bäder)</p>
                            <br>
                            <p>Wir führen sämtliche wichtige Marken. Zudem etliche Designmarken aus dem nahen Ausland, welche sehr hohe Qualität liefern.</p>
                            <br>
                        </div>
                        <div class="col-md-5">
                            <img src="images/bg/about-left.JPG" class="img-thumbnail" width="100%" alt="">
                        </div>
                    </div>

                    <h5 class="text-center mb-4"><strong>Unsere Ziele:</strong></h5>
                    <div class="row" style="align-items: center;">
                        <div class="col-md-5">
                            <img src="images/bg/aim.JPG" class="img-thumbnail" width="100%" alt="">
                        </div>
                        <div class="col-md-7">
                            <p>Die Freude und die Zufriedenheit des Kunden ist unsere Motivation.</p><br>
                            <p>Der Mensch steht bei uns im Vordergrund. Nicht die Gewinnmaximierung ist das Ziel, sondern eine rundherum zufriedene Bauherrschaft.</p><br>
                            <p>Begeistere Kunden welche unsere Ausstellung glücklicher verlassen als dass sie gekommen sind, geben uns den Antrieb das Maximale zu leisten.</p><br>
                            <p>Denn: Nichts ist so motivierend wie ein Bauherr, welcher sich für die gute Beratung, das Top Material und den prompten Lieferservice bedankt..</p><br>

                        </div>
                    </div>
                    <p class="mt-4 text-center"><strong>Werden auch Sie zu unserem Partner! Sie werden es nicht bereuen.</strong></p>
                </div>
            </div>
        </div>
</section>


@endsection