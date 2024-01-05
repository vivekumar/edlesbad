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
                            <span class="breadcrumb-item active">inspiration</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="htc__product__grid bg__white ptb--100">
    <div class="container">
        <div class="row">
            <div class="d-flex flex-wrap w-100 table-success table-striped">
                <div class="five-div">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><a href="">Inspirationen</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="">Badmöbel von FALPER</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Badmöbel Flow by ARCA</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Badewannen in Mattstone</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Badewannen in Mattstone</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Badewannen in Mattstone</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Badewannen in Mattstone</a></td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="five-div">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><a href="">über uns</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="">über uns</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Öffnungszeiten</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Öffnungszeiten</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Öffnungszeiten</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Öffnungszeiten</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Öffnungszeiten</a></td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="five-div">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Neuheiten</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="">Begehbare Badewanne zum </a></td>
                            </tr>
                            <tr>
                                <td><a href="">Begehbare Badewanne zum </a></td>
                            </tr>
                            <tr>
                                <td><a href="">Begehbare Badewanne zum </a></td>
                            </tr>
                            <tr>
                                <td><a href="">Begehbare Badewanne zum </a></td>
                            </tr>
                            <tr>
                                <td><a href="">Begehbare Badewanne zum </a></td>
                            </tr>
                            <tr>
                                <td><a href="">Begehbare Badewanne zum</a></td>
                            </tr>

                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="five-div">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> <a href="">Themen</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="">Nischen in Duschen</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Nischen in Duschen</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Nischen in Duschen</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Nischen in Duschen</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Nischen in Duschen</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Nischen in Duschen</a></td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="five-div">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><a href=""></a><a href="">Rechtliches</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="">AGB's</a></td>
                            </tr>
                            <tr>
                                <td><a href="">AGB's</a></td>
                            </tr>
                            <tr>
                                <td><a href="">AGB's</a></td>
                            </tr>
                            <tr>
                                <td><a href="">AGB's</a></td>
                            </tr>
                            <tr>
                                <td><a href="">AGB's</a></td>
                            </tr>
                            <tr>
                                <td><a href="">AGB's</a></td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection