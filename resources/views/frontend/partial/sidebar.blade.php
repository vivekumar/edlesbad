<div class="htc__product__leftsidebar">

    <!-- Start Category Area -->
    <div class="htc__category">

        <ul class="cato-list">
            @php
            $categories=App\Helpers\Helper::getCategory();

            $current_uri = request()->segments();
            /*$selected_url=[]; $url_array=[];
            foreach($current_uri as $loop_url){
            $selected_url[]=$loop_url;
            $url_array[]=implode("/",$selected_url);
            }*/
            //print_r($url_array);
            @endphp

            @if($categories)
            @foreach($categories as $category1)
            <?php $slug = $category1->slug;
            $slug2 = $category1->slug; ?>
            <li class="{{ in_array($slug, $current_uri) ? 'active' : '' }}">
                <a href="{{url($slug)}}">{{$category1->title}}</a>
                @if(count($category1->subcategory))
                @include('frontend.partial.subCategoryList-option',['subcategories' => $category1->subcategory])
                @endif
                @endforeach
                @endif
            </li>


        </ul>
    </div>

    <!-- Start Prize Range -->
    <div class="htc-grid-range mt-5">
        <h4 class="title__line--4">Price</h4>
        <div class="content-shopby">
            <div class="price_filter s-filter clear">
                <form action="#" method="GET">
                    <div id="slider-range"></div>
                    <div class="slider__range--output">
                        <div class="price__output--wrap">
                            <div class="price--output">
                                <span>Price :</span><input type="text" id="amount" readonly>
                            </div>
                            <div class="price--filter">
                                <a href="#">Filter</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Prize Range -->

    <!-- End Pro Color -->
    <!-- Start Best Sell Area -->
    <div class="htc__recent__product">
        <h2 class="title__line--4">best seller</h2>
        <div class="htc__recent__product__inner">
            <!-- Start Single Product -->
            <div class="htc__best__product">
                <div class="htc__best__pro__thumb">
                    <a href="produkte-details.php">
                        <img src="/images/product/1.jpg" width="90" alt="small product">
                    </a>
                </div>
                <div class="htc__best__product__details">
                    <h2><a href="produkte-details.php">Largest Water Pot</a></h2>
                    <!-- <ul class="rating">
                                                <li><i class="icon-star icons"></i></li>
                                                <li><i class="icon-star icons"></i></li>
                                                <li><i class="icon-star icons"></i></li>
                                                <li class="old"><i class="icon-star icons"></i></li>
                                                <li class="old"><i class="icon-star icons"></i></li>
                                            </ul> -->
                    <ul class="pro__prize">
                        <li class="old__prize">$82.5</li>
                        <li>$75.2</li>
                    </ul>
                </div>
            </div>
            <!-- End Single Product -->
            <!-- Start Single Product -->
            <div class="htc__best__product">
                <div class="htc__best__pro__thumb">
                    <a href="produkte-details.php">
                        <img src="/images/product/2.jpg" width="90" alt="small product">
                    </a>
                </div>
                <div class="htc__best__product__details">
                    <h2><a href="produkte-details.php">Largest Water Pot</a></h2>
                    <!-- <ul class="rating">
                                                <li><i class="icon-star icons"></i></li>
                                                <li><i class="icon-star icons"></i></li>
                                                <li><i class="icon-star icons"></i></li>
                                                <li class="old"><i class="icon-star icons"></i></li>
                                                <li class="old"><i class="icon-star icons"></i></li>
                                            </ul> -->
                    <ul class="pro__prize">
                        <li class="old__prize">$82.5</li>
                        <li>$75.2</li>
                    </ul>
                </div>
            </div>
            <!-- End Single Product -->
            <!-- Start Single Product -->
            <div class="htc__best__product">
                <div class="htc__best__pro__thumb">
                    <a href="produkte-details">
                        <img src="/images/product/3.jpg" width="90" alt="small product">
                    </a>
                </div>
                <div class="htc__best__product__details">
                    <h2><a href="produkte-details">Largest Water Pot</a></h2>

                    <ul class="pro__prize">
                        <li class="old__prize">$82.5</li>
                        <li>$75.2</li>
                    </ul>
                </div>
            </div>
            <!-- End Single Product -->
        </div>
    </div>
    <!-- End Best Sell Area -->
</div>