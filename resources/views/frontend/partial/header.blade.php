<!-- Body main wrapper start -->
@php
//print_r(Auth::user());
@endphp

<div class="wrapper">
    <section class="bg-dark text-white pt-2 pb-2">
        <div class="container-fluid">
            <div class="header-top-area gray-bg-1 section-fluid-255">
                <div class="container-fluid">
                    <div class="row flex-column flex-md-row justify-content-md-between justify-content-center align-items-center">
                        <div class="col-auto">
                            <div class="header-left-wrapper">
                                <ul class="header-top-text d-flex flex-column flex-md-row justify-content-center">
                                    <li class="mr-4"><i class="fa fa-envelope"></i> <a class="text-white" href="mailto: info@edles-bad.ch" class="text-white">info@edles-bad.ch</a></li>
                                    <li class="mr-4"><i class="fa fa-phone"></i><a class="text-white" href="tel:+ 41 56 511 23 20 "> +0203 150 1284</a></li>
                                    <li><i class="fa fa-file-pdf-o"></i><a class="text-white" href="https://www.edlesbad.ch/resources/public/lava3/media/Edlesbad-Broschuere%202018.pdf" target="_blank" download=""> Gesamtprospekt</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="header-right-wrapper">
                                <ul class="header-right-text d-flex flex-column flex-md-row justify-content-center">
                                    @if (Auth::check())
                                    <li class="mr-2">Hi {{ Auth::user()->first_name ?? ""}}</li>
                                    <li class="mr-2"><a href="{{url('myaccount')}}" class="text-white">My account</a></li>
                                    <li class="mr-2"><a href="{{url('logout')}}" class="text-white">Logout</a></li>
                                    @else
                                    <li class="mr-2"><a href="{{url('login')}}" class="text-white">{{_('Login')}}</a></li>
                                    @endif
                                    <li class="mr-2"><a class="text-white" href="{{'/'}}">Home</a></li>
                                    <li class="mr-2"><a href="{{url('blog')}}" class="text-white">Blog</a></li>

                                    <li>
                                        <div class="htc__shopping__cart mt-md-0 mt-2 ml-2">
                                            <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                            <a href="#"><span class="htc__qua">2</span></a>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Header Style -->
    <header id="htc__header" class="htc__header__area header--one">
        <!-- Start Mainmenu Area -->
        <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-5 position-relative">
                        <div class="logo">
                            <a href="/"><img src="{{ URL::asset('images/logo/logo-4.png')}}" alt="logo images"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 d-none d-xl-block">
                        <nav class="main__menu__nav">
                            <ul class="main__menu">
                                <!-- <li><a href="#">Home</a></li> -->
                                <li><a href="/produkte">Produkte</a></li>

                                <li class="drop"><a href="/inspiration">Inspirationen</a>
                                    <ul class="dropdown">
                                        <li><a href="inspiration">Badmöbel von FALPER</a></li>
                                        <li><a href="inspiration">Badmöbel Flow by ARCA</a></li>
                                        <li><a href="inspiration">Badewannen in Mattstone</a></li>
                                        <li><a href="inspiration">Badewannen in Steinguss Hochglanz</a></li>
                                        <li><a href="inspiration">Badewannen aus Holz</a></li>
                                        <li><a href="inspiration">Design-Duschböden</a></li>
                                        <li><a href="inspiration">Spiegelschränke</a></li>
                                        <li><a href="inspiration">Design-Waschtische aus Mineralguss</a></li>
                                        <li><a href="inspiration">Unsere Dusch-WC's</a></li>
                                        <li><a href="inspiration">Unsere Badmischer</a></li>
                                        <li><a href="inspiration">Unsere Duschtrennwände</a></li>
                                        <li><a href="inspiration">Kunst im Bad</a></li>
                                        <li><a href="inspiration">Klassische Badkeramik</a></li>
                                        <li><a href="inspiration">Klassische Badezimmer</a></li>
                                    </ul>
                                </li>

                                <li class="drop"><a href="ueber-uns-edlesbad">über uns</a>
                                    <ul class="dropdown">
                                        <li><a href="ueber-uns-edlesbad">Über uns</a></li>
                                        <li><a href="#">Öffnungszeiten</a></li>
                                        <li><a href="#">So finden Sie uns</a></li>
                                        <li><a href="#">Badausstellung</a></li>
                                        <li><a href="#">Leitbild</a></li>
                                        <li><a href="#">Kontakt</a></li>
                                        <li><a href="#">Soziales Engagement</a></li>
                                        <li><a href="#">Facebook Blog</a></li>
                                    </ul>
                                </li>

                                <li class="drop"><a href="kategorien">Neuheiten</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Begehbare Badewanne zum Duschen</a></li>
                                        <li><a href="#">Badewanne THEANO</a></li>
                                        <li><a href="#">Wandnische in Badezimmer</a></li>
                                        <li><a href="#">Badarmaturen in Edelstahl</a></li>
                                        <li><a href="#">Badarmaturen von DURAVIT</a></li>
                                        <li><a href="#">Badewanne mit Tür</a></li>
                                        <li><a href="#">Spiegelschrank-Neuheiten</a></li>
                                        <li><a href="#">Neue Badmöbel von Duravit</a></li>
                                        <li><a href="#">Armaturen in schwarz oder weiss</a></li>
                                        <li><a href="#">Klassische Heizkörper</a></li>
                                        <li><a href="#">Moderne Duschböden</a></li>
                                        <li><a href="#">Neuheiten von V&amp;B</a></li>
                                    </ul>
                                </li>

                                <li class="drop"><a href="#">Themen</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Nischen in Duschen</a></li>
                                        <li><a href="#">Wanne in Dusche umbauen</a></li>
                                        <li><a href="#">Waschlösungen in Waschküche</a></li>
                                        <li><a href="#">Alles-über-Duscharmaturen</a></li>
                                        <li><a href="#">Badberatung Badplanung Badumbau</a></li>
                                        <li><a href="#">Barrierefreies Badezimmer</a></li>
                                        <li><a href="#">Badezimmer renovieren Schweiz</a></li>
                                        <li><a href="#">Badezimmerrenovation im Aargau</a></li>
                                        <li><a href="#">Badezimmereinrichtungen</a></li>
                                        <li><a href="#">Badkeramik</a></li>
                                        <li><a href="#">Badmöbel</a></li>
                                        <li><a href="#">Bad-renovation</a></li>
                                        <li><a href="#">Duschtrennwände</a></li>
                                        <li><a href="#">Walk-In-Duschtrennwände</a></li>
                                        <li><a href="#">Einbauwannen</a></li>
                                        <li><a href="#">Freistehende Badewanne</a></li>
                                        <li class="last"><a href="#">nostalgie-bad</a></li>
                                    </ul>
                                </li>

                                <li><a href="unsere-lieferanten">Unsere Lieferanten</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">Prospekte</a></li>
                                <li><a href="#">Bilder Von Kunden</a></li>
                                <!-- <li><a href="#">Blog</a></li>                                    -->
                            </ul>
                        </nav>

                        <div class="mobile-menu d-block d-xl-none">
                            <nav id="mobile_dropdown">
                                <ul>
                                    <!-- <li><a href="#">Home</a></li> -->
                                    <li><a href="#">Produkte</a></li>
                                    <li class="drop"><a href="#">Inspirationen</a>
                                        <ul class="dropdown">
                                            <li><a href="#"><span>Badmöbel von FALPER</span></a></li>
                                            <li><a href="#"><span>Badmöbel Flow by ARCA</span></a></li>
                                            <li><a href="#">Badewannen in Mattstone</a></li>
                                            <li><a href="#">Badewannen in Steinguss Hochglanz</a></li>
                                            <li><a href="#">Badewannen aus Holz</a></li>
                                            <li><a href="#">Design-Duschböden</a></li>
                                            <li><a href="#">Spiegelschränke</a></li>
                                            <li><a href="#">Design-Waschtische aus Mineralguss</a></li>
                                            <li><a href="#">Unsere Dusch-WC's</a></li>
                                            <li><a href="#">Unsere Badmischer</a></li>
                                            <li><a href="#">Unsere Duschtrennwände</a></li>
                                            <li><a href="#">Kunst im Bad</a></li>
                                            <li><a href="#">Klassische Badkeramik</a></li>
                                            <li><a href="#">Klassische Badezimmer</a></li>
                                        </ul>
                                    </li>

                                    <li class="drop"><a href="#">über uns</a>
                                        <ul class="dropdown">
                                            <li><a href="#"><span>Über uns</span></a></li>
                                            <li><a href="#">Öffnungszeiten</a></li>
                                            <li><a href="#">So finden Sie uns</a></li>
                                            <li><a href="#">Badausstellung</a></li>
                                            <li><a href="#">Leitbild</a></li>
                                            <li><a href="#">Kontakt</a></li>
                                            <li><a href="#">Soziales Engagement</a></li>
                                            <li><a href="#">Facebook Blog</a></li>
                                        </ul>
                                    </li>

                                    <li class="drop"><a href="#">Neuheiten</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Begehbare Badewanne zum Duschen</a></li>
                                            <li><a href="#">Badewanne THEANO</a></li>
                                            <li><a href="#">Wandnische in Badezimmer</a></li>
                                            <li><a href="#">Badarmaturen in Edelstahl</a></li>
                                            <li><a href="#">Badarmaturen von DURAVIT</a></li>
                                            <li><a href="#">Badewanne mit Tür</a></li>
                                            <li><a href="#">Spiegelschrank-Neuheiten</a></li>
                                            <li><a href="#">Neue Badmöbel von Duravit</a></li>
                                            <li><a href="#">Armaturen in schwarz oder weiss</a></li>
                                            <li><a href="#">Klassische Heizkörper</a></li>
                                            <li><a href="#">Moderne Duschböden</a></li>
                                            <li><a href="#">Neuheiten von V&amp;B</a></li>
                                        </ul>
                                    </li>

                                    <li class="drop"><a href="#">Themen</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Nischen in Duschen</a></li>
                                            <li><a href="#">Wanne in Dusche umbauen</a></li>
                                            <li><a href="#">Waschlösungen in Waschküche</a></li>
                                            <li><a href="#">Alles-über-Duscharmaturen</a></li>
                                            <li><a href="#">Badberatung Badplanung Badumbau</a></li>
                                            <li><a href="#">Barrierefreies Badezimmer</a></li>
                                            <li><a href="#">Badezimmer renovieren Schweiz</a></li>
                                            <li><a href="#">Badezimmerrenovation im Aargau</a></li>
                                            <li><a href="#">Badezimmereinrichtungen</a></li>
                                            <li><a href="#">Badkeramik</a></li>
                                            <li><a href="#">Badmöbel</a></li>
                                            <li><a href="#">Bad-renovation</a></li>
                                            <li><a href="#">Duschtrennwände</a></li>
                                            <li><a href="#">Walk-In-Duschtrennwände</a></li>
                                            <li><a href="#">Einbauwannen</a></li>
                                            <li><a href="#">Freistehende Badewanne</a></li>
                                            <li class="last"><a href="#">nostalgie-bad</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#">Unsere Lieferanten</a></li>
                                    <!-- <li><a href="#">Videos</a></li>
                                            <li><a href="#">Prospekte</a></li>
                                            <li><a href="#">Bilder Von Kunden</a></li>
                                            <li><a href="#">Blog</a></li>                                    -->

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- <div class="col-xl-2 col-lg-3 col-sm-8 col-6">
                            <div class="header__right">
                                <div class="header__search search search__open">
                                    <a href="#"><i class="icon-magnifier icons"></i></a>
                                </div>
                                <div class="header__account">
                                    <a href="#"><i class="icon-user icons"></i></a>
                                </div>
                                <div class="htc__shopping__cart">
                                    <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                    <a href="#"><span class="htc__qua">2</span></a>
                                </div>
                            </div>
                        </div> -->
                </div>
                <div class="mobile-menu-area d-flex"></div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
    <!-- End Header Area -->


    <div class="body__overlay"></div>
    <div class="offset__wrapper">
        <div class="search__area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="search__inner">
                            <form action="#" method="get">
                                <input placeholder="Search here... " type="text">
                                <button type="submit"></button>
                            </form>
                            <div class="search__close__btn">
                                <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product/8.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="#">Donec Ac Tempus Nrb</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$105.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product/12.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="#">Chair Collection</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$25.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$130.00</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="#">View Cart</a></li>
                        <li class="shp__checkout"><a href="#">Checkout</a></li>
                    </ul>
                </div>
            </div> -->

    </div>