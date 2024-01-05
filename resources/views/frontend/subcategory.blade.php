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
                @include('frontend.partial.sidebar')
                <div class="htc__recent__product img-info">
                    <div class="htc__recent__product__inner">
                        <img src="{{url('/images/product/info_checkout.png')}}" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-9 order-lg-2 order-1">
                <div class="htc__product__rightidebar">
                    <div class="htc__grid__top">
                        {{--<div class="htc__select__option">
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
                        </div>--}}

                        <!-- Start List And Grid View -->
                        <!-- <ul class="nav view__mode" role="tablist">
                                    <li role="presentation" class="grid-view"><a class="active" href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
                                    <li role="presentation" class="list-view"><a href="#list-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
                                </ul> -->
                        <!-- End List And Grid View -->
                    </div>

                    <div class="container ">
                        <div class="auto" style="display: auto;">
                            <h2 class="main_header__title" style="display: inline;">Category</h2>
                            <div class="ht__pro__qun pull-right">
                                <div class="ser-prod">
                                    <input type="search" name="" id="" placeholder="Volltextsuche">
                                    <i class="icon-magnifier icons"></i>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-2">

                        <div class="row">
                            @php $current_uri = request()->segments();@endphp
                            @foreach($categories->subcategory as $category)
                            <div class="col-lg-4 col-sm-6">
                                <div class="box">
                                    <a href="{{ route('category.show', ['category' => implode('/',$current_uri).'/'.$category->slug]) }}">
                                        {{--<a href="{{url('category/'.$category->slug)}}">--}}
                                        @if($category->image)
                                        <img src="{{asset($category->image)}}" alt="">
                                        @else
                                        <img src="images/catogary/2.jpg" alt="">
                                        @endif
                                        <div class="box__title">
                                            <h6>{{$category->title}}</h6>
                                            <p>Designerstücke; Kunstvolle Badmöbel, Aufsatzbecken und mehr </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                    <!-- Start Pagenation -->
                    {{--<div class="row">
                        <div class="col-lg-12">
                            <ul class="htc__pagenation">
                                <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">19</a></li>
                                <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>--}}
                    <!-- End Pagenation -->
                </div>
            </div>
        </div>
</section>
<!-- End Product Grid -->


@endsection
@section('js')

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