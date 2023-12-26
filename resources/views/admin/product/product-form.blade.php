@extends('layouts.admin_layout')
@section('content')
@section('title', 'Add Product')


<!-- ========== App Menu ========== -->

<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->

            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">@if(isset($product)) Edit @else Add @endif Product</h4>

                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">

                                @if (session('msg'))
                                <div class="alert alert-{{ session('msg_type') }}" role="alert">
                                    {{ session('msg') }}
                                </div>
                                @endif


                                <form method="post" action="{{url('admin/product/save')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-4">

                                        <div class="col-md-9">
                                            <div class="row gy-4">
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="title" class="form-label">Title</label>
                                                        <input type="text" class="form-control" name="title" value="{{ isset($product)?$product->title:old('title') }}">
                                                    </div>
                                                    @error('title')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>


                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="descriptions" class="form-label">Short Description</label>
                                                        <textarea class="form-control" name="descriptions">{{ isset($product)?$product->description:old('description') }}</textarea>
                                                    </div>
                                                    @error('description')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="descriptions" class="form-label">Description</label>
                                                        <textarea class="form-control" name="content">{{ isset($product)?$product->content:old('content') }}</textarea>
                                                    </div>
                                                    @error('description')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>



                                                <!--end col-->


                                            </div><!--end row-->
                                        </div><!--end col 9-->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Select parent category*</label>
                                                    <select type="text" name="category_id" class="form-control">
                                                        <option value="">None</option>
                                                        @if($categories)
                                                        @foreach($categories as $category1)

                                                        <?php $dash = ''; ?>
                                                        <option value="{{$category1->id}}" @if($category1->id==$product->category_id){{'selected'}}@endif>{{$category1->title}}</option>
                                                        @if(count($category1->subcategory))
                                                        @include('admin.category.subCategoryList-option',['subcategories' => $category1->subcategory])
                                                        @endif
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                                @error('category_id')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <div>
                                                    <label for="sku" class="form-label">SKU</label>
                                                    <input type="text" class="form-control" name="sku" value="{{ isset($product)?$product->sku:old('sku') }}">
                                                </div>
                                                @error('title')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <div>
                                                    <label for="price" class="form-label">Price</label>
                                                    <input type="text" class="form-control" name="price" value="{{ isset($product)?$product->price:old('price') }}">
                                                </div>
                                                @error('price')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <label for="sell_price" class="form-label">Sell Price</label>
                                                    <input type="text" class="form-control" name="sell_price" value="{{ isset($product)?$product->sell_price:old('sell_price') }}">
                                                </div>
                                                @error('price')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <label for="gallery_image" class="form-label">Product Image</label>
                                                    <input type="file" class="form-control" name="thumbnail">
                                                </div>
                                                @error('images')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                                @if($product->thumbnail)
                                                <img src="{{url('storage/products/'.$product->thumbnail)}}" style="max-width:100%; height:150px">
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <label for="name" class="form-label">Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="" @if(isset($product) && $product->status == '') {{"selected"}} @endif>--Select--</option>
                                                        <option value=" 1" @if(isset($product) && $product->status == 1) {{"selected"}} @endif selected="">Active</option>
                                                        <option value="0" @if(isset($product) && $product->status == 0) {{"selected"}} @endif>Inactive</option>
                                                    </select>

                                                    @error('status')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror

                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <br><br>
                                    <div class="row gy-4">

                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <input type="hidden" name="product_id" value="{{ isset($product)?$product->id:old('product_id') }}">
                                                <input type="submit" class="btn btn-success" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </form>



                            </div>

                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->




        </div> <!-- container-fluid -->
    </div><!-- End Page-content -->

    @include('includes.admin.footer')
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->
<script>
    CKEDITOR.replace('descriptions');
    CKEDITOR.replace('content');
</script>


@stop