@extends('frontend/layout/layout')
@section('page_title', 'Admin Dashboard')
@section('container')
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{url('/images/bg/4.jpg')}}) no-repeat scroll center center / cover ;">
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
                                @if($product->gallery->count()>0)
                                @foreach($product->gallery as $key=>$gallery)
                                <div role="tabpanel" class="tab-pane fade show @if($key==0) active @endif" id="img-tab-{{$key}}">
                                    <img src="{{asset('storage/products/'.$gallery->image)}}" alt="{{$gallery->image_name}}">
                                </div>
                                @endforeach
                                @else
                                <img src="{{asset('storage/products/'.$product->thumbnail)}}" alt="full-image">
                                @endif
                            </div>
                        </div>
                        <!-- End Product Big Images -->
                        <!-- Start Small images -->
                        <ul class="nav product__small__images" role="tablist">
                            @foreach($product->gallery as $key=>$gallery)
                            <li role="presentation" class="pot-small-img">
                                <a class="@if($key==0) active @endif" href="#img-tab-{{$key}}" role="tab" data-toggle="tab">
                                    <img src="{{asset('storage/products/'.$gallery->image)}}" width="80" alt="{{$gallery->image_name}}">
                                </a>
                            </li>
                            @endforeach

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
                    <li role="presentation" class="technische"><a href="#technische" role="tab" data-toggle="tab">TECHNISCHE DATEN</a></li>
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
                            @foreach($product->pdfs as $pdf)
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z" />
                                </svg> {{$pdf->pdf_name}}</a>
                            @endforeach
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="technische" class="pro__single__content tab-pane fade">
                        <div class="pro__tab__content__inner">
                            {!!$product->technical_data!!}
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="shipping" class="pro__single__content tab-pane fade">
                        <div class="pro__tab__content__inner">

                            @if(isset($product->accesories))
                            <div role="tabpanel" id="grid-view" class="row">
                                @foreach($product->accesories as $accesories)
                                <div class="col-lg-3 col-md-6">
                                    <div class="category">
                                        <div class="ht__cat__thumb">
                                            <a href="{{url($accesories->product->slug)}}">
                                                @if($accesories->product->thumbnail)
                                                <img src="{{asset('storage/products/'.$accesories->product->thumbnail)}}" alt="{{$product->title}}">
                                                @else
                                                <img src="{{asset('images/product/1.jpg')}}" alt="product images">
                                                @endif
                                            </a>
                                        </div>

                                        <div class="fr__product__inner">
                                            <h4><a href="{{url($accesories->product->slug)}}">{{$accesories->product->title}} </a></h4>
                                            <ul class="fr__pro__prize">
                                                @if($accesories->product->sell_price && $accesories->product->price>$accesories->product->sell_price)
                                                <li class="old__prize"><strike>CHF {{$product->price}}</strike></li>
                                                <li>CHF {{$accesories->product->sell_price}}</li>
                                                @else
                                                <li>CHF {{$accesories->product->price}}</li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
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
            @foreach($latest_product as $lproduct)
            <div class="col-lg-3 col-md-6">
                <div class="category">
                    <div class="ht__cat__thumb">
                        <a href="{{$lproduct->slug}}">
                            <img src="{{asset('storage/products/'.$lproduct->thumbnail)}}" alt="product images">
                        </a>
                    </div>
                    {{--<div class="fr__hover__info">
                        <ul class="product__action">
                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                            <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                        </ul>
                    </div>--}}
                    <div class="fr__product__inner">
                        <h4><a href="{{$lproduct->slug}}">{{$lproduct->title}}</a></h4>
                        <ul class="fr__pro__prize">
                            @if($lproduct->sell_price && $lproduct->price>$product->sell_price)
                            <li class="old__prize"><strike>CHF {{$lproduct->price}}</strike></li>
                            <li>CHF {{$lproduct->sell_price}}</li>
                            @else
                            <li>CHF {{$lproduct->price}}</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Product Area -->
@endsection