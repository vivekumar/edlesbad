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
                            <span class="breadcrumb-item active">Blog Details</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Blog Details Area -->
<section class="htc__blog__details bg__white ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="htc__blog__details__wrap">
                    <div class="ht__bl__thumb">
                        <img src="images/banner/aussendusche.jpg" alt="blog images">
                    </div>
                    <div class="bl__dtl">
                        <h2>Das sind die Vorteile einer Aussendusche</h2>

                        <p>Sie geniessen einen sonnigen Tag im Garten und Ihnen steht der Sinn nach Abkühlung. Statt ins Haus zu gehen und dort das Badezimmer aufzusuchen, können Sie sich gleich draussen abduschen. Möglich macht dies eine Aussendusche. Im Folgenden erfahren Sie, welche Vorteile sie hat und welche Modelle Sie bei Edles Bad erhalten.</p>
                        <h1 class="mt-3 mb-3">Was ist überhaupt eine Aussendusche?</h1>
                        <img src="images/product/09_aussendusche-500-6910_flow-wall.jpg" width="100%" style="max-width:420px" class="img-thumbnail" alt="blog images">


                        <p class="mt-3">Eine Aussendusche ist eine Dusche, die sich im Freien befindet. Sie kann auf der Rasenfläche im Garten installiert sein, sich aber auch auf einem anderen Untergrund befinden. Wasser bezieht sie üblicherweise über den Hausanschluss. Ist dies der Fall, dann kann sowohl auf kaltes als auch auf warmes Wasser zugegriffen werden.</p>

                        <!-- Start Comment Area -->
                        <div class="htc__comment__area">
                            <h4 class="title__line--5">HAVE 2 COMMENTS</h4>
                            <div class="ht__comment__content">
                                <!-- Start Single Comment -->
                                <div class="comment">
                                    <div class="comment__thumb">
                                        <img src="images/comment/1.png" alt="comment images">
                                    </div>
                                    <div class="ht__comment__details">
                                        <div class="ht__comment__title">
                                            <h2><a href="#">JOHN NGUYEN</a></h2>
                                            <div class="reply__btn">
                                                <a href="#">reply</a>
                                            </div>
                                        </div>
                                        <span>July 15, 2016 at 2:39 am</span>
                                        <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>
                                    </div>
                                </div>
                                <!-- End Single Comment -->
                                <!-- Start Single Comment -->
                                <div class="comment comment--reply">
                                    <div class="comment__thumb">
                                        <img src="images/comment/2.png" alt="comment images">
                                    </div>
                                    <div class="ht__comment__details">
                                        <div class="ht__comment__title">
                                            <h2><a href="#">JOHN NGUYEN</a></h2>
                                            <div class="reply__btn">
                                                <a href="#">reply</a>
                                            </div>
                                        </div>
                                        <span>July 15, 2016 at 2:39 am</span>
                                        <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>
                                    </div>
                                </div>
                                <!-- End Single Comment -->
                                <!-- Start Single Comment -->
                                <div class="comment">
                                    <div class="comment__thumb">
                                        <img src="images/comment/3.png" alt="comment images">
                                    </div>
                                    <div class="ht__comment__details">
                                        <div class="ht__comment__title">
                                            <h2><a href="#">JOHN NGUYEN</a></h2>
                                            <div class="reply__btn">
                                                <a href="#">reply</a>
                                            </div>
                                        </div>
                                        <span>July 15, 2016 at 2:39 am</span>
                                        <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>
                                    </div>
                                </div>
                                <!-- End Single Comment -->
                            </div>
                        </div>
                        <!-- End Comment Area -->
                        <!-- Start comment Form -->
                        <div class="ht__comment__form">
                            <h4 class="title__line--5">Leave a Comment</h4>
                            <div class="ht__comment__form__inner">
                                <div class="comment__form">
                                    <input type="text" placeholder="Name *">
                                    <input type="email" placeholder="Email *">
                                    <input type="text" placeholder="Website">
                                </div>
                                <div class="comment__form message">
                                    <textarea name="message" placeholder="Your Comment"></textarea>
                                </div>
                            </div>
                            <div class="ht__comment__btn--2 mt--30">
                                <a class="fr__btn" href="#">Send</a>
                            </div>
                        </div>
                        <!-- End comment Form -->

                    </div>
                </div>
            </div>
        </div>
</section>
<!-- End Blog Details Area -->


@endsection