@extends('frontend/layout/layout')
@section('page_title', 'Admin Dashboard')
@section('container')
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner">
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="index.php">Home</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                            <span class="breadcrumb-item active">Produkte</span>
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
                    <div class="htc__grid__top">
                        <div class="htc__select__option">
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
                        </div>
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
                        <h2 class="main_header__title">Category</h2>
                        <hr class="mt-2">

                        <div class="row">

                            <div class="col-lg-4 col-sm-6">
                                <div class="box">
                                    <a href="#">
                                        <img src="images/catogary/1.jpg" alt="">
                                        <div class="box__title">
                                            <h6>Kunst im Bad</h6>
                                            <p>Designerstücke; Kunstvolle Badmöbel, Aufsatzbecken und mehr </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="box">
                                    <a href="#">
                                        <img src="images/catogary/2.jpg" alt="">
                                        <div class="box__title">
                                            <h6>Baden</h6>
                                            <p>Badewannen, Wannenmischer, Badewannentrennwände</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="box">
                                    <a href="#">
                                        <img src="images/catogary/3.jpg" alt="">
                                        <div class="box__title">
                                            <h6>Duschen</h6>
                                            <p>Duschtrennwände, Duschmischer, Duschwannen, Duschrinnen, Duschaccessoires</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="box">
                                    <a href="#">
                                        <img src="images/catogary/4.jpg" alt="">
                                        <div class="box__title">
                                            <h6>Waschen</h6>
                                            <p>Waschtische. Waschbecken, Handwaschbecken, Möbelwaschtische usw.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="box">
                                    <a href="#">
                                        <img src="images/catogary/5.jpg" alt="">
                                        <div class="box__title">
                                            <h6>Armaturen</h6>
                                            <p>Aufsatzmischer, Waschtischmischer, Duschenmischer, Bidetmischer, Wasserhahn, Wandmischer</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Start Pagenation -->
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="htc__pagenation">
                                <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">19</a></li>
                                <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Pagenation -->
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