@extends('frontend/layout/layout')
@section('page_title', 'Admin Dashboard')
@section('container')
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{url('/images/bg/about.jpg')}}) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner">
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="{{url('/')}}">Home</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                            <span class="breadcrumb-item active">{{$page->title}}</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="htc__product__grid bg__white ptb--100">
    <div class="container">

        {!!$page->descriptions!!}


</section>


@endsection