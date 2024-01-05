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
</div>