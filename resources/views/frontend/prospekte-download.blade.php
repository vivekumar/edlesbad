@extends('frontend/layout/layout')
@section('page_title', 'Admin Dashboard')
@section('css')
<style>
    .pdf-list {
        text-align: center;
    }

    .pdf-list img {
        max-height: 250px;
    }
</style>
@endsection
@section('container')
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/1.jpg) no-repeat scroll center center / cover ;">
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
                        <img src="/images/product/info_checkout.png" width="100%" alt="">
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
                        @php
                        $numOfCols = 4;
                        $rowCount = 0;
                        $bootstrapColWidth = 12 / $numOfCols;
                        @endphp
                        @foreach ($pdfs as $pdf)
                        @if ($rowCount % $numOfCols == 0)
                        <div class="row"> @endif
                            @php $rowCount++; @endphp
                            <div class="col-md-{{$bootstrapColWidth}} mb-4">
                                <div class="pdf-list">
                                    <a href="{{asset($pdf->pdf)}}" title="{{$pdf->title}}">
                                        <img src="{{asset($pdf->image)}}" alt="{{$pdf->title}}">
                                        <p>{!!$pdf->title!!}</p>
                                    </a>
                                    <div class="pdf-buttom">
                                        @php
                                        $pdf22 = file_get_contents(url($pdf->pdf));
                                        $number = preg_match_all("/\/Page\W/", $pdf22, $dummy);
                                        @endphp
                                        <span>{{$number}}</span>
                                        <span>{{ number_format(strlen($pdf22)/1024/1024,1) }}</span>
                                    </div>
                                </div>
                            </div>

                            @if ($rowCount % $numOfCols == 0)
                        </div> @endif
                        @endforeach


                    </div>
                    {{ $pdfs->onEachSide(5)->links() }}
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