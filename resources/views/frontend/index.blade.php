@extends('frontend/layout/layout')
@section('page_title', 'Admin Dashboard')
@section('container')
<div class="container-fluid pl-0 pr-0">
    <div id="magicCarousel" class="carousel slide" data-ride="carousel">

        <!-- Carousel Indicators    -->
        <ol class="carousel-indicators">
            <li data-target="#magicCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#magicCarousel" data-slide-to="1"></li>
            <li data-target="#magicCarousel" data-slide-to="2"></li>
            <li data-target="#magicCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Carousel Slider    -->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="images/banner/1.jpg" class="d-block w-100">
                <!-- <div class="carousel-caption">
                    <h3>Slide 01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At placeat dolore obcaecati perspiciatis neque in, iusto, quia aut molestias minus ipsam modi dolorem odit eos.</p>
                  </div>  -->
            </div>

            <div class="carousel-item">
                <img src="images/banner/4.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="images/banner/2.jpg" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="images/banner/3.jpg" class="d-block w-100">
            </div>

            <!--     Carousel Controls     -->
            <a href="#magicCarousel" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#magicCarousel" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</div>




<!-- End // .directional_nav -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Start Slider Area -->
<!-- Start Category Area -->
<section class="htc__category__area ptb--80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">New Arrivals</h2>
                    <!-- <p>But I must explain to you how all this mistaken idea</p> -->
                </div>
            </div>
        </div>
        <div class="row product-list_area mt--30">
            <!-- Start Single Category -->
            <div class="col-xl-3 col-md-4">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="#">
                            <img src="images/product/1.jpg" alt="product images">
                        </a>
                    </div>
                    <!-- <div class="fr__hover__info">
                                <ul class="product__action">
                                    <li><a href="#"><i class="icon-heart icons"></i></a></li>

                                    <li><a href="#"><i class="icon-handbag icons"></i></a></li>

                                    <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                </ul>
                            </div> -->
                    <div class="fr__product__inner newarrreadmore">
                        <h4><a href="#">Largest Water Pot</a></h4>

                        <!-- <ul class="fr__pro__prize">
                                    <li class="old__prize">$30.3</li>
                                    <li>$25.9</li>
                                </ul> -->
                    </div>
                </div>
            </div>
            <!-- End Single Category -->
            <!-- Start Single Category -->
            <div class="col-xl-3 col-md-4">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="#">
                            <img src="images/product/2.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="fr__product__inner  newarrreadmore">
                        <h4><a href="#">Bathtub mixer from the floor</a></h4>

                    </div>
                </div>
            </div>
            <!-- End Single Category -->
            <!-- Start Single Category -->
            <div class="col-xl-3 col-md-4">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="#">
                            <img src="images/product/3.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="fr__product__inner  newarrreadmore">
                        <h4><a href="#">kuchenmischer</a></h4>

                    </div>
                </div>
            </div>
            <!-- End Single Category -->
            <!-- Start Single Category -->
            <div class="col-xl-3 col-md-4">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="#">
                            <img src="images/product/4.jpg" alt="product images">
                        </a>
                    </div>

                    <div class="fr__product__inner  newarrreadmore">
                        <h4><a href="#">Washing troughs/spouts</a></h4>

                    </div>
                </div>
            </div>
            <!-- End Single Category -->

            <!-- End Single Category -->
            <div class="col-xl-3 col-md-4">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="#">
                            <img src="images/product/5.jpg" alt="product images">
                        </a>
                    </div>

                    <div class="fr__product__inner  newarrreadmore">
                        <h4><a href="#">Washing troughs/spouts</a></h4>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="#">
                            <img src="images/product/6.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="fr__product__inner  newarrreadmore">
                        <h4><a href="#">kuchenmischer</a></h4>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="#">
                            <img src="images/product/7.jpg" alt="product images">
                        </a>
                    </div>

                    <div class="fr__product__inner  newarrreadmore">
                        <h4><a href="#">Washing troughs/spouts</a></h4>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="#">
                            <img src="images/product/8.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="fr__product__inner  newarrreadmore">
                        <h4><a href="#">kuchenmischer</a></h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Category Area -->
<!-- Start Prize Good Area -->
<section class="htc__good__sale bg__cat--3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="fr__prize__inner">
                    <h2>Waschsäule, weiss glanz</h2>
                    <!-- <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3> -->
                    <a class="fr__btn" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="prize__inner">
                    <div class="prize__thumb">
                        <img src="images/banner/big-img/1.png" alt="banner images">
                    </div>
                    <div class="banner__info">
                        <div class="pointer__tooltip pointer--3 align-left">
                            <div class="tooltip__box">
                                <h4>Tooltip Left</h4>
                                <p>Lorem ipsum pisaci volupt atem accusa saes ntisdumtiu loperm asaerks.</p>
                            </div>
                        </div>
                        <div class="pointer__tooltip pointer--4 align-top">
                            <div class="tooltip__box">
                                <h4>Tooltip Top</h4>
                                <p>Lorem ipsum pisaci volupt atem accusa saes ntisdumtiu loperm asaerks.</p>
                            </div>
                        </div>
                        <div class="pointer__tooltip pointer--5 align-bottom">
                            <div class="tooltip__box">
                                <h4>Tooltip Bottom</h4>
                                <p>Lorem ipsum pisaci volupt atem accusa saes ntisdumtiu loperm asaerks.</p>
                            </div>
                        </div>
                        <div class="pointer__tooltip pointer--6 align-top">
                            <div class="tooltip__box">
                                <h4>Tooltip Bottom</h4>
                                <p>Lorem ipsum pisaci volupt atem accusa saes ntisdumtiu loperm asaerks.</p>
                            </div>
                        </div>
                        <div class="pointer__tooltip pointer--7 align-top">
                            <div class="tooltip__box">
                                <h4>Tooltip Bottom</h4>
                                <p>Lorem ipsum pisaci volupt atem accusa saes ntisdumtiu loperm asaerks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Prize Good Area -->
<!-- Start Product Area -->
<section class="ftr__product__area ptb--80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Best Seller</h2>
                </div>
            </div>
        </div>
        <div class="product__wrap row">
            <!-- Start Single Category -->
            <div class="col-xl-3 col-md-4">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="#">
                            <img src="images/product/9.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="fr__hover__info">
                        <ul class="product__action">
                            <li><a href="#"><i class="icon-heart icons"></i></a></li>

                            <li><a href="#"><i class="icon-handbag icons"></i></a></li>

                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="fr__product__inner">
                        <h4><a href="#">Special Wood Basket</a></h4>
                        <ul class="fr__pro__prize">
                            <li class="old__prize">$30.3</li>
                            <li>$25.9</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Single Category -->
            <!-- Start Single Category -->
            <div class="col-xl-3 col-md-4">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="#">
                            <img src="images/product/10.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="fr__hover__info">
                        <ul class="product__action">
                            <li><a href="#"><i class="icon-heart icons"></i></a></li>

                            <li><a href="#"><i class="icon-handbag icons"></i></a></li>

                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="fr__product__inner">
                        <h4><a href="#">voluptatem accusantium</a></h4>
                        <ul class="fr__pro__prize">
                            <li class="old__prize">$30.3</li>
                            <li>$25.9</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Single Category -->
            <!-- Start Single Category -->
            <div class="col-xl-3 col-md-4">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="#">
                            <img src="images/product/11.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="fr__hover__info">
                        <ul class="product__action">
                            <li><a href="#"><i class="icon-heart icons"></i></a></li>

                            <li><a href="#"><i class="icon-handbag icons"></i></a></li>

                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="fr__product__inner">
                        <h4><a href="#">Kuchenmischer</a></h4>
                        <ul class="fr__pro__prize">
                            <li class="old__prize">$30.3</li>
                            <li>$25.9</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Single Category -->
            <!-- Start Single Category -->
            <div class="col-xl-3 col-md-4">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="#">
                            <img src="images/product/12.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="fr__hover__info">
                        <ul class="product__action">
                            <li><a href="#"><i class="icon-heart icons"></i></a></li>

                            <li><a href="#"><i class="icon-handbag icons"></i></a></li>

                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="fr__product__inner">
                        <h4><a href="#">Washing Troughs/Spouts </a></h4>
                        <ul class="fr__pro__prize">
                            <li class="old__prize">$30.3</li>
                            <li>$25.9</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Single Category -->
        </div>
    </div>
</section>
<!-- End Product Area -->
<!-- Start Top Rated Area -->
<section class="top__rated__area bg__white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Top Rated</h2>
                </div>
            </div>
        </div>
        <div class="row mt--20">
            <!-- Start Single Product -->
            <div class="col-xl-4 col-md-6">
                <div class="htc__best__product">
                    <div class="htc__best__pro__thumb">
                        <a href="#">
                            <img src="images/product/13.jpg" alt="small product">
                        </a>
                    </div>
                    <div class="htc__best__product__details">
                        <h2><a href="#">Special Wood Basket</a></h2>
                        <ul class="rating">
                            <li><i class="icon-star icons"></i></li>
                            <li><i class="icon-star icons"></i></li>
                            <li><i class="icon-star icons"></i></li>
                            <li class="old"><i class="icon-star icons"></i></li>
                            <li class="old"><i class="icon-star icons"></i></li>
                        </ul>
                        <ul class="top__pro__prize">
                            <li class="old__prize">$82.5</li>
                            <li>$75.2</li>
                        </ul>
                        <div class="best__product__action">
                            <ul class="product__action--dft">
                                <li><a href="#"><i class="icon-heart icons"></i></a></li>
                                <li><a href="#"><i class="icon-handbag icons"></i></a></li>
                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Product -->
            <!-- Start Single Product -->
            <div class="col-xl-4 col-md-6">
                <div class="htc__best__product">
                    <div class="htc__best__pro__thumb">
                        <a href="#">
                            <img src="images/product/14.jpg" alt="small product">
                        </a>
                    </div>
                    <div class="htc__best__product__details">
                        <h2><a href="#">Voluptatem Accusantium</a></h2>
                        <ul class="rating">
                            <li><i class="icon-star icons"></i></li>
                            <li><i class="icon-star icons"></i></li>
                            <li><i class="icon-star icons"></i></li>
                            <li class="old"><i class="icon-star icons"></i></li>
                            <li class="old"><i class="icon-star icons"></i></li>
                        </ul>
                        <ul class="top__pro__prize">
                            <li class="old__prize">$82.5</li>
                            <li>$75.2</li>
                        </ul>
                        <div class="best__product__action">
                            <ul class="product__action--dft">
                                <li><a href="#"><i class="icon-heart icons"></i></a></li>
                                <li><a href="#"><i class="icon-handbag icons"></i></a></li>
                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Product -->
            <!-- Start Single Product -->
            <div class="col-xl-4 col-md-6">
                <div class="htc__best__product">
                    <div class="htc__best__pro__thumb">
                        <a href="#">
                            <img src="images/product/15.jpg" alt="small product">
                        </a>
                    </div>
                    <div class="htc__best__product__details">
                        <h2><a href="#">Kuchenmischer</a></h2>
                        <ul class="rating">
                            <li><i class="icon-star icons"></i></li>
                            <li><i class="icon-star icons"></i></li>
                            <li><i class="icon-star icons"></i></li>
                            <li class="old"><i class="icon-star icons"></i></li>
                            <li class="old"><i class="icon-star icons"></i></li>
                        </ul>
                        <ul class="top__pro__prize">
                            <li class="old__prize">$82.5</li>
                            <li>$75.2</li>
                        </ul>
                        <div class="best__product__action">
                            <ul class="product__action--dft">
                                <li><a href="#"><i class="icon-heart icons"></i></a></li>
                                <li><a href="#"><i class="icon-handbag icons"></i></a></li>
                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Product -->
        </div>
    </div>
</section>
<!-- End Top Rated Area -->

<!-- Start Blog Area -->
<section class="htc__blog__area bg__white ptb--80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Blog</h2>
                </div>
            </div>
        </div>
        <div class="ht__blog__wrap row">
            <!-- Start Single Blog -->
            <div class="col-xl-4 col-md-6">
                <div class="blog">
                    <div class="blog__thumb">
                        <a href="#">
                            <img src="images/blog/blog-img/1.jpg" alt="blog images">
                        </a>
                    </div>
                    <div class="blog__details">
                        <h2><a href="#">Waschküche: Hilfreiche Tipps für die Einrichtung</a></h2>
                        <p>A laundry room is a room in a single-family home or apartment building in which there are one or more washing machines.</p>
                        <div class="blog__btn">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
            <!-- Start Single Blog -->
            <div class="col-xl-4 col-md-6">
                <div class="blog">
                    <div class="blog__thumb">
                        <a href="#">
                            <img src="images/blog/blog-img/2.jpg" alt="blog images">
                        </a>
                    </div>
                    <div class="blog__details">
                        <h2><a href="#">Which mirror cabinet suits my bathroom best?</a></h2>
                        <p>There is hardly a bathroom that does not have a mirror cabinet - and there are good reasons for that.</p>
                        <div class="blog__btn">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
            <!-- Start Single Blog -->
            <div class="col-xl-4 col-md-6">
                <div class="blog">
                    <div class="blog__thumb">
                        <a href="#">
                            <img src="images/blog/blog-img/3.jpg" alt="blog images">
                        </a>
                    </div>
                    <div class="blog__details">
                        <h2><a href="#">How to choose the right <br> washbasin</a></h2>
                        <p>The demands on bathroom design have changed. While functional aspects were once the focus, today</p>
                        <div class="blog__btn">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
        </div>
    </div>
</section>
<!-- End Blog Area -->
<!-- End Banner Area -->

<!-- footer include code here... -->
@endsection