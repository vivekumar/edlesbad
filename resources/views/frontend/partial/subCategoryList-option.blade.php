@php $slug .= '/';

@endphp
<ul id="gallery" class="submenu {{in_array($slug2, $current_uri) ? 'active' : ''}}">
    @foreach($subcategories as $subcategory)
    <li class="{{ in_array($subcategory->slug, $current_uri) ? 'active' : '' }}"><a href="{{url($slug.$subcategory->slug)}}">{{$subcategory->title}} </a>
        @if(count($subcategory->subcategory))

        @include('frontend.partial.subCategoryList-option',['subcategories' => $subcategory->subcategory,'slug'=>$slug.$subcategory->slug,'slug2'=>$subcategory->slug])
        @endif
    </li>
    @endforeach
</ul>