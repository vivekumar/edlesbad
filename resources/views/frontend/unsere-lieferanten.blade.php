@extends('frontend/layout/layout')
@section('page_title', 'Admin Dashboard')
@section('container')
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{url('/images/bg/1.jpg')}}) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner">
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="{{url('/')}}">Home</a>
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
                @include('frontend.partial.sidebar-page')
                <div class="htc__recent__product img-info">
                    <div class="htc__recent__product__inner">
                        <img src="{{url('/images/product/info_checkout.png')}}" width="100%" alt="">
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
                        <h2 class="main_header__title mb-4">{{$page->title}}</h2>
                        {!!$page->descriptions!!}
                        <br>
                        <br>
                        <hr>

                        <div class="row">
                            @foreach($partners as $partner)
                            <div class="col-md-3 col-6 mb-4">
                                <div class="brand-lgo-c-i">
                                    <a href="{{$partner->url}}" title="{{$partner->title}}">
                                        <img src="{{asset($partner->image)}}" alt="{{$partner->title}}">
                                        <p>{{$partner->title}}</p>
                                    </a>
                                </div>
                            </div>
                            @endforeach


                            {{--<div class="col-lg-12 htc__brand__area bg__cat--4">
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
                            </div>--}}
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