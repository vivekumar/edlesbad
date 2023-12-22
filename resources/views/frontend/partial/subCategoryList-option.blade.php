<?php $slug .= '/'; ?>
<ul id="gallery" class="submenu">
    @foreach($subcategories as $subcategory)
    <li><a href="{{$slug.$subcategory->slug}}">{{$subcategory->title}} </a>
        @if(count($subcategory->subcategory))

        @include('frontend.partial.subCategoryList-option',['subcategories' => $subcategory->subcategory,'slug'=>$slug.$subcategory->slug])
        @endif
    </li>
    @endforeach
</ul>