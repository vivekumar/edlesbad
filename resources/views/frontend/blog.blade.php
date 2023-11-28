@extends('frontend/layout/layout')
@section('page_title', 'Admin Dashboard')
@section('container')

<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner">
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="index.html">Home</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                            <span class="breadcrumb-item active">Blog</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Blog Area -->
<section class="htc__blog__area bg__white ptb--100">
    <div class="container">
        <div class="ht__blog__wrap blog--page row">
            <!-- Start Single Blog -->
            <div class="col-xl-4 col-lg-6">
                <div class="blog">
                    <div class="blog__thumb">
                        <a href="blog-details">
                            <img src="images/blog/blog-img/1.jpg" alt="blog images">
                        </a>
                    </div>
                    <div class="blog__details">
                        <div class="bl__date">
                            <span>March 22, 2023</span>
                        </div>
                        <h2><a href="blog-details">Waschküche: Hilfreiche Tipps für die Einrichtung</a></h2>
                        <p>A laundry room is a room in a single-family home or apartment building in which there are one or more washing machines.</p>
                        <div class="blog__btn">
                            <a href="blog-details">Mehr</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
            <!-- Start Single Blog -->
            <div class="col-xl-4 col-lg-6">
                <div class="blog">
                    <div class="blog__thumb">
                        <a href="blog-details">
                            <img src="images/blog/blog-img/2.jpg" alt="blog images">
                        </a>
                    </div>
                    <div class="blog__details">
                        <div class="bl__date">
                            <span>May 22, 2023</span>
                        </div>
                        <h2><a href="blog-details">Which mirror cabinet suits my bathroom best?</a></h2>
                        <p>There is hardly a bathroom that does not have a mirror cabinet - and there are good reasons for that.</p>
                        <div class="blog__btn">
                            <a href="blog-details">Mehr</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
            <!-- Start Single Blog -->
            <div class="col-xl-4 col-lg-6">
                <div class="blog">
                    <div class="blog__thumb">
                        <a href="blog-details">
                            <img src="images/blog/blog-img/3.jpg" alt="blog images">
                        </a>
                    </div>
                    <div class="blog__details">
                        <div class="bl__date">
                            <span>March 22, 2023</span>
                        </div>
                        <h2><a href="blog-details">How to choose the right
                                washbasin</a></h2>
                        <p>The demands on bathroom design have changed. While functional aspects were once the focus, toda</p>
                        <div class="blog__btn">
                            <a href="blog-details">Mehr</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->

            <!-- Start Single Blog -->
            <div class="col-xl-4 col-lg-6">
                <div class="blog">
                    <div class="blog__thumb">
                        <a href="blog-details">
                            <img src="images/blog/blog-img/1.jpg" alt="blog images">
                        </a>
                    </div>
                    <div class="blog__details">
                        <div class="bl__date">
                            <span>March 22, 2023</span>
                        </div>
                        <h2><a href="blog-details">Waschküche: Hilfreiche Tipps für die Einrichtung</a></h2>
                        <p>A laundry room is a room in a single-family home or apartment building in which there are one or more washing machines.</p>
                        <div class="blog__btn">
                            <a href="blog-details">Mehr</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
            <!-- Start Single Blog -->
            <div class="col-xl-4 col-lg-6">
                <div class="blog">
                    <div class="blog__thumb">
                        <a href="blog-details">
                            <img src="images/blog/blog-img/2.jpg" alt="blog images">
                        </a>
                    </div>
                    <div class="blog__details">
                        <div class="bl__date">
                            <span>May 22, 2023</span>
                        </div>
                        <h2><a href="blog-details">Which mirror cabinet suits my bathroom best?</a></h2>
                        <p>There is hardly a bathroom that does not have a mirror cabinet - and there are good reasons for that.</p>
                        <div class="blog__btn">
                            <a href="blog-details">Mehr</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
            <!-- Start Single Blog -->
            <div class="col-xl-4 col-lg-6">
                <div class="blog">
                    <div class="blog__thumb">
                        <a href="blog-details">
                            <img src="images/blog/blog-img/3.jpg" alt="blog images">
                        </a>
                    </div>
                    <div class="blog__details">
                        <div class="bl__date">
                            <span>March 22, 2023</span>
                        </div>
                        <h2><a href="blog-details">How to choose the right
                                washbasin</a></h2>
                        <p>The demands on bathroom design have changed. While functional aspects were once the focus, toda</p>
                        <div class="blog__btn">
                            <a href="blog-details">Mehr</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->



        </div>
        <!-- Start PAgenation -->
        <div class="row">
            <div class="col-lg-12">
                <ul class="htc__pagenation">
                    <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="zmdi zmdi-more"></i></a></li>
                    <li><a href="#">19</a></li>
                    <li class="active"><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End PAgenation -->
    </div>
</section>
<!-- End Blog Area -->


@endsection