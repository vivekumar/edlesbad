@extends('frontend/layout/layout')
@section('page_title', 'Admin Dashboard')
@section('container')
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/1.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner">
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="index.php">Home</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                            <span class="breadcrumb-item active">Unsere Lieferanten</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Product Grid -->
<section class="htc__product__grid bg__white ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 smt-40 xmt-40 order-lg-1 order-2">
                <div class="htc__product__leftsidebar">

                    <!-- Start Category Area -->
                    <div class="htc__category">

                        <ul class="cato-list">
                            <li>
                                <a href="#" onclick="toggleSubmenu('gallery')">Kunst im Bad
                                </a>
                                <ul id="gallery" class="submenu">
                                    <li>
                                        <a href="#" onclick="toggleSubmenu('old')">Keramik-Kunst von DOMIZIANI</a>
                                        <ul id="old" class="submenu">
                                            <li><a onclick="changeColor(this)" href="#">Aufsatzbecken Keramik</a></li>
                                            <li><a onclick="changeColor(this)" href="#">Keramik-Kunst Designspiegel</a></li>
                                            <li><a onclick="changeColor(this)" href="#">Vintage Design-Badmöbel</a></li>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        </li>
                        <li>
                            <a href="#" onclick="toggleSubmenu('Baden')">Baden</a>
                            <ul id="Baden" class="submenu">
                                <li>
                                    <a href="#" onclick="toggleSubmenu('Badewannen')">Badewannen freistehend</a>
                                    <ul id="Badewannen" class="submenu">
                                        <li><a onclick="changeColor(this)" href="#">Wannen freistehend matt</a></li>
                                        <li><a onclick="changeColor(this)" href="#">Luxus Badewannen von Mastella</a></li>
                                        <li><a onclick="changeColor(this)" href="#">Wannen freistehend Glanz</a></li>
                                        <li><a onclick="changeColor(this)" href="#">Badewanne aus Sanitäracryl</a></li>
                                        <li><a onclick="changeColor(this)" href="#">Restpostenwannen</a></li>
                                        <li><a onclick="changeColor(this)" href="#">Zubehör zu freistehende Wannen</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a onclick="changeColor(this)" href="#">Wannenmischer vom Boden</a>
                                </li>
                                <li>
                                    <a onclick="changeColor(this)" href="#">Badewanne mit Tür</a>
                                </li>

                                <li>
                                    <a onclick="changeColor(this)" href="#">Einbauwannen</a>
                                </li>
                                <li>
                                    <a onclick="changeColor(this)" href="#">Mischer zu Einbauwannen</a>
                                </li>
                                <li>
                                    <a onclick="changeColor(this)" href="#">Badewannen-Abtrennungen</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Duschen</a></li>
                        <li><a href="#">Waschen</a></li>
                        <li><a href="#">Armaturen</a></li>
                        <li><a href="#">Sanitär-Keramiklinien</a></li>
                        <li><a href="#">Badmöbel</a></li>
                        </ul>
                        </li>
                        </ul>
                    </div>

                    <!-- Start Prize Range -->
                    <div class="htc-grid-range mt-5">
                        <h4 class="title__line--4">Price</h4>
                        <div class="content-shopby">
                            <div class="price_filter s-filter clear">
                                <form action="#" method="GET">
                                    <div id="slider-range"></div>
                                    <div class="slider__range--output">
                                        <div class="price__output--wrap">
                                            <div class="price--output">
                                                <span>Price :</span><input type="text" id="amount" readonly>
                                            </div>
                                            <div class="price--filter">
                                                <a href="#">Filter</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Prize Range -->

                    <!-- End Pro Color -->
                    <!-- Start Best Sell Area -->
                    <div class="htc__recent__product">
                        <h2 class="title__line--4">best seller</h2>
                        <div class="htc__recent__product__inner">
                            <!-- Start Single Product -->
                            <div class="htc__best__product">
                                <div class="htc__best__pro__thumb">
                                    <a href="produkte-details.php">
                                        <img src="images/product/1.jpg" width="90" alt="small product">
                                    </a>
                                </div>
                                <div class="htc__best__product__details">
                                    <h2><a href="produkte-details.php">Largest Water Pot</a></h2>
                                    <!-- <ul class="rating">
                                                <li><i class="icon-star icons"></i></li>
                                                <li><i class="icon-star icons"></i></li>
                                                <li><i class="icon-star icons"></i></li>
                                                <li class="old"><i class="icon-star icons"></i></li>
                                                <li class="old"><i class="icon-star icons"></i></li>
                                            </ul> -->
                                    <ul class="pro__prize">
                                        <li class="old__prize">$82.5</li>
                                        <li>$75.2</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="htc__best__product">
                                <div class="htc__best__pro__thumb">
                                    <a href="produkte-details.php">
                                        <img src="images/product/2.jpg" width="90" alt="small product">
                                    </a>
                                </div>
                                <div class="htc__best__product__details">
                                    <h2><a href="produkte-details.php">Largest Water Pot</a></h2>
                                    <!-- <ul class="rating">
                                                <li><i class="icon-star icons"></i></li>
                                                <li><i class="icon-star icons"></i></li>
                                                <li><i class="icon-star icons"></i></li>
                                                <li class="old"><i class="icon-star icons"></i></li>
                                                <li class="old"><i class="icon-star icons"></i></li>
                                            </ul> -->
                                    <ul class="pro__prize">
                                        <li class="old__prize">$82.5</li>
                                        <li>$75.2</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="htc__best__product">
                                <div class="htc__best__pro__thumb">
                                    <a href="produkte-details.php">
                                        <img src="images/product/3.jpg" width="90" alt="small product">
                                    </a>
                                </div>
                                <div class="htc__best__product__details">
                                    <h2><a href="produkte-details.php">Largest Water Pot</a></h2>

                                    <ul class="pro__prize">
                                        <li class="old__prize">$82.5</li>
                                        <li>$75.2</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Product -->
                        </div>
                    </div>
                    <!-- End Best Sell Area -->
                </div>
                <div class="htc__recent__product img-info">
                    <div class="htc__recent__product__inner">
                        <img src="images/product/info_checkout.png" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-9 order-lg-2 order-1">
                <div class="htc__product__rightidebar">
                    <div class="htc__grid__top" style="justify-content : end;">
                        <!-- <div class="htc__select__option">
                                    <select class="ht__select">
                                        <option>Default softing</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by newness</option>
                                    </select>
                                    <select class="ht__select">
                                        <option>Show by</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by newness</option>
                                    </select>
                                </div> -->
                        <div class="ht__pro__qun">
                            <div class="ser-prod">
                                <input type="search" name="" id="" placeholder="Volltextsuche">
                                <i class="icon-magnifier icons"></i>
                            </div>
                        </div>
                        <!-- Start List And Grid View -->
                        <!-- <ul class="nav view__mode" role="tablist">
                                    <li role="presentation" class="grid-view"><a class="active" href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
                                    <li role="presentation" class="list-view"><a href="#list-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
                                </ul> -->
                        <!-- End List And Grid View -->
                    </div>

                    <div class="container mt-4">
                        <h2 class="main_header__title mb-4">Unsere Lieferanten</h2>
                        <!-- <hr class="mt-2"> -->
                        <p>Als Vollsortimenter bieten wir Ihnen Produkte von weit über sechzig Lieferanten an.</p>

                        <p>Unsere wichtigsten Partner haben wir Ihnen hier aufgelistet.</p>

                        <p>Gerne laden wir Sie ein, auch auf den Webseiten unserer Lieferanten zu stöbern.</p>
                        <p><b>Alles was Ihnen gefällt, können wir Ihnen liefern.</b></p>
                        <br>
                        <br>
                        <hr>

                        <div class="row">
                            <div class="col-md-3 col-6 mb-4">
                                <div class="brand-lgo-c-i">
                                    <a href="https://www.keuco.com/de/produkte/armaturen/" title="KEUCO">
                                        <img src="images/logo/keuco-logo.jpg" alt="">
                                        <p>Accessoires + Armaturen</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-4">
                                <div class="brand-lgo-c-i">
                                    <a href="" title="TREEMME">
                                        <img src="images/logo/Treemmelogo.png" alt="">
                                        <p>Armaturen</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-4">
                                <div class="brand-lgo-c-i">
                                    <a href="" title="KWC">
                                        <img src="images/logo/KWC-Logo.jpg" alt="">
                                        <p> Armaturen</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-4">
                                <div class="brand-lgo-c-i">
                                    <a href="" title="Hansgrohe">
                                        <img src="images/logo/Hansgrohe Logo.png" alt="">
                                        <p>Armaturen</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-4">
                                <div class="brand-lgo-c-i">
                                    <a href="" title="Dornbracht">
                                        <img src="images/logo/Dornbracht Logo.gif" alt="">
                                        <p> Armaturen</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-4">
                                <div class="brand-lgo-c-i">
                                    <a href="" title="GROHE">
                                        <img src="images/logo/grohe-logo.png" alt="">
                                        <p> Armaturen</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-4">
                                <div class="brand-lgo-c-i">
                                    <a href="" title="FIR - Italia">
                                        <img src="images/logo/FIR-Italia Logo.png" alt="">
                                        <p>Armaturen</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-4">
                                <div class="brand-lgo-c-i">
                                    <a href="" title="PAFFONI">
                                        <img src="images/logo/Paffoni-Logo(3).jpg" alt="">
                                        <p>Armaturen</p>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-12 htc__brand__area bg__cat--4">
                                <div class="ht__brand__inner">
                                    <ul class="brand__list owl-carousel clearfix">
                                        <li><a href="https://www.keuco.com/de/produkte/armaturen/"><img src="images/logo/ARCA-Logo(1).png" style="width : 125px;" alt="ARCA"></a></li>
                                        <li><a href="#"><img src="images/logo/Dornbracht Logo.gif" style="width : 125px;" alt="Dornbracht"></a></li>
                                        <li><a href="#"><img src="images/logo/duravit-Logo.png" style="width : 125px;" alt="duravit"></a></li>
                                        <li><a href="#"><img src="images/logo/grohe-logo.png" style="width : 125px;" alt="grohe"></a></li>
                                        <li><a href="#"><img src="images/logo/Elemento Logo.jpg" style="width : 125px;" alt="Elemento"></a></li>
                                        <li><a href="#"><img src="images/logo/FALPER-Logo.png" style="width : 125px;" alt="FALPER"></a></li>
                                        <li><a href="#"><img src="images/logo/FIR-Italia Logo.png" style="width : 125px;" alt="FIR-Italia"></a></li>
                                        <li><a href="#"><img src="images/logo/Franke Logo.png" style="width : 125px;" alt="Franke"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- End Product Grid -->

<script>
    let currentColor = null; // Store the current color

    function toggleSubmenu(id) {
        const submenu = document.getElementById(id);
        submenu.style.display = submenu.style.display === "block" ? "none" : "block";
    }

    function changeColor(element) {
        if (currentColor) {
            currentColor.style.backgroundColor = ""; // Reset the color of the previously clicked item
        }
        element.style.backgroundColor = "#e9e9e9"; // Change the color to red (you can use any color you prefer)
        currentColor = element; // Set the current element as the one with changed color
    }
</script>
<!-- footer include code here... -->
@endsection