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
                            <a class="breadcrumb-item" href="{{url('/')}}">Home</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                            <span class="breadcrumb-item active">{{$product->title}}</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Product Details Area -->
<section class="htc__product__details bg__white ptb--100">
    <!-- Start Product Details Top -->
    <div class="htc__product__details__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="htc__product__details__tab__content">
                        <!-- Start Product Big Images -->
                        <div class="product__big__images">
                            <div class="portfolio-full-image tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="img-tab-1">
                                    <img src="images/product/12.jpg" alt="full-image">
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="img-tab-2">
                                    <img src="images/product/13.jpg" alt="full-image">
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="img-tab-3">
                                    <img src="images/product/14.jpg" alt="full-image">
                                </div>
                            </div>
                        </div>
                        <!-- End Product Big Images -->
                        <!-- Start Small images -->
                        <ul class="nav product__small__images" role="tablist">
                            <li role="presentation" class="pot-small-img">
                                <a class="active" href="#img-tab-1" role="tab" data-toggle="tab">
                                    <img src="images/product/12.jpg" width="80" alt="small-image">
                                </a>
                            </li>
                            <li role="presentation" class="pot-small-img">
                                <a href="#img-tab-2" role="tab" data-toggle="tab">
                                    <img src="images/product/13.jpg" width="80" alt="small-image">
                                </a>
                            </li>
                            <li role="presentation" class="pot-small-img">
                                <a href="#img-tab-3" role="tab" data-toggle="tab">
                                    <img src="images/product/14.jpg" width="80" alt="small-image">
                                </a>
                            </li>
                        </ul>
                        <!-- End Small images -->
                    </div>
                </div>
                <div class="col-lg-7 smt-40 xmt-40">
                    <div class="ht__product__dtl">
                        <h2>{{$product->title}}</h2>
                        <h6><span>{{$product->sku}}</span></h6>
                        {{--<ul class="rating">
                            <li><i class="icon-star icons"></i></li>
                            <li><i class="icon-star icons"></i></li>
                            <li><i class="icon-star icons"></i></li>
                            <li class="old"><i class="icon-star icons"></i></li>
                            <li class="old"><i class="icon-star icons"></i></li>
                        </ul>--}}
                        <ul class="pro__prize">
                            @if($product->sell_price && $product->price>$product->sell_price)
                            <li class="old__prize"><strike>CHF {{$product->price}}</strike></li>
                            <li>CHF {{$product->sell_price}}</li>
                            @else
                            <li>CHF {{$product->price}}</li>
                            @endif

                        </ul>
                        <div class="product-description">{!!$product->description!!}</div>
                        <div class="ht__pro__desc">
                            <div class="sin__desc">
                                <p><span>Availability:</span> In Stock</p>
                            </div>

                            <!-- <div class="mt-3">
                                        <a href="" class="fr__btn">Auf Offertliste</a>
                                        <a href="" class="fr__btn">In den Warenkorb</a>
                                    </div> -->




                            <div class="sin__desc product__share__link">
                                <p><span>Share this:</span></p>
                                <ul class="pro__share">
                                    <li><a href="#" target="_blank"><i class="icon-social-twitter icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-instagram icons"></i></a></li>

                                    <li><a href="https://www.facebook.com/Furny/?ref=bookmarks" target="_blank"><i class="icon-social-facebook icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-google icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-linkedin icons"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="icon-social-pinterest icons"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Details Top -->
</section>
<!-- End Product Details Area -->
<!-- Start Product Description -->
<section class="htc__produc__decription bg__white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Start List And Grid View -->
                <ul class="nav pro__details__tab" role="tablist">
                    <li role="presentation" class="description"><a class="active" href="#description" role="tab" data-toggle="tab">Beschreibung</a></li>
                    <li role="presentation" class="review"><a href="#review" role="tab" data-toggle="tab">Downloads</a></li>
                    <li role="presentation" class="shipping"><a href="#shipping" role="tab" data-toggle="tab">Zubehör</a></li>
                </ul>
                <!-- End List And Grid View -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ht__pro__details__content">
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="description" class="pro__single__content tab-pane fade show in active">
                        <div class="pro__tab__content__inner">
                            {!!$product->content!!}
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="review" class="pro__single__content tab-pane fade">
                        <div class="pro__tab__content__inner">

                            <h4 class="ht__pro__title">Download</h4>
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z" />
                                </svg> Montageanleitung Badu</a>
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="shipping" class="pro__single__content tab-pane fade">
                        <div class="pro__tab__content__inner">
                            <p>Formfitting clothing is all about a sweet spot. That elusive place where an item is tight but not clingy, sexy but not cloying, cool but not over the top. Alexandra Alvarez’s label, Alix, hits that mark with its range of comfortable, minimal, and neutral-hued bodysuits.</p>
                            <h4 class="ht__pro__title">Description</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            <h4 class="ht__pro__title">Standard Featured</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>
                        </div>
                    </div>
                    <!-- End Single Content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Description -->
<!-- Start Product Area -->
<section class="htc__product__area--2 pb--100 product-details-res">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">New Arrivals</h2>
                </div>
            </div>
        </div>
        <div class="product__wrap row">
            <!-- Start Single Product -->
            <div class="col-lg-3 col-md-6">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="product-details.html">
                            <img src="images/product/1.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="fr__hover__info">
                        <ul class="product__action">
                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                            <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="fr__product__inner">
                        <h4><a href="product-details.html">Product Title Here </a></h4>
                        <ul class="fr__pro__prize">
                            <li class="old__prize">$30.3</li>
                            <li>$25.9</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Single Product -->
            <!-- Start Single Product -->
            <div class="col-lg-3 col-md-6">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="product-details.html">
                            <img src="images/product/2.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="fr__hover__info">
                        <ul class="product__action">
                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                            <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="fr__product__inner">
                        <h4><a href="product-details.html">Product Title Here </a></h4>
                        <ul class="fr__pro__prize">
                            <li class="old__prize">$30.3</li>
                            <li>$25.9</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Single Product -->
            <!-- Start Single Product -->
            <div class="col-lg-3 col-md-6">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="product-details.html">
                            <img src="images/product/3.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="fr__hover__info">
                        <ul class="product__action">
                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                            <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="fr__product__inner">
                        <h4><a href="product-details.html">Product Title Here </a></h4>
                        <ul class="fr__pro__prize">
                            <li class="old__prize">$30.3</li>
                            <li>$25.9</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Single Product -->
            <!-- Start Single Product -->
            <div class="col-lg-3 col-md-6">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="product-details.html">
                            <img src="images/product/4.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="fr__hover__info">
                        <ul class="product__action">
                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                            <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="fr__product__inner">
                        <h4><a href="product-details.html">Product Title Here </a></h4>
                        <ul class="fr__pro__prize">
                            <li class="old__prize">$30.3</li>
                            <li>$25.9</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Single Product -->
        </div>
    </div>
</section>
<!-- End Product Area -->
@endsection