@extends('layouts.admin_layout')
@section('content')
@section('title', 'Add Category')


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
                            <h4 class="card-title mb-0 flex-grow-1">@if(isset($category)) Edit @else Add @endif Category</h4>

                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">

                                @if (session('msg'))
                                <div class="alert alert-{{ session('msg_type') }}" role="alert">
                                    {{ session('msg') }}
                                </div>
                                @endif


                                <form method="post" action="{{url('admin/category/save')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-4">


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Select parent category*</label>
                                                <select type="text" name="parent_id" class="form-control">
                                                    <option value="">None</option>
                                                    @if($categories)
                                                    @foreach($categories as $category1)

                                                    <?php $dash = ''; ?>
                                                    <option value="{{$category1->id}}" @if(isset($category) && $category->parent_id == $category1->id) {{"selected"}} @endif>{{$category1->title}}</option>
                                                    @if(count($category1->subcategory))
                                                    @include('admin.category.subCategoryList-option',['subcategories' => $category1->subcategory,'category'=>$category1])
                                                    @endif
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                            @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control" name="title" value="{{ isset($category)?$category->title:old('title') }}">
                                            </div>
                                            @error('title')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>


                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="name" class="form-label">Status</label>
                                                <select name="status" class="form-control">
                                                    <option value="" @if(isset($category) && $category->status == '') {{"selected"}} @endif>--Select--</option>
                                                    <option value="1" @if(isset($category) && $category->status == 1) {{"selected"}} @endif selected="">Active</option>
                                                    <option value="0" @if(isset($category) && $category->status == 0) {{"selected"}} @endif>Inactive</option>
                                                </select>

                                                @error('status')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror

                                            </div>
                                        </div>


                                        @if(isset($category->image))
                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="blog" class="form-label">Image</label>
                                                <img src="{{URL::asset($category->image)}}" style="height: 120px; width: 120px;">
                                            </div>

                                        </div>
                                        @endif

                                        <!--end col-->

                                        <!--end col-->
                                    </div>

                                    <br><br>
                                    <div class="row gy-4">

                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <input type="hidden" name="category_id" value="{{ isset($category)?$category->id:old('category_id') }}">
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
</script>

@stop