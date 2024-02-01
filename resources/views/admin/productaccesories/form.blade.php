@extends('layouts.admin_layout')
@section('content')
@section('title', 'Add Product image')


<!-- Main content -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary1">
                        <div class="card-header">
                            <h3 class="card-title">Add Accesories</h3>
                        </div>
                        <!-- /.card-header -->
                        @if (session('msg'))
                        <div class="alert alert-{{ session('msg_type') }}" role="alert">
                            {{ session('msg') }}
                        </div>
                        @endif

                        <!-- form start -->
                        <form action="{{route('productaccesories.save')}}" method="post" enctype="multipart/form-data">

                            <!--<input type="hidden" name="_method" value="PUT"> -->
                            @csrf
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select parent category*</label>
                                            <select type="text" id="category_id" name="category_id" class="form-control">
                                                <option value="">None</option>
                                                @if($categories)
                                                @foreach($categories as $category1)

                                                @php $dash = '';
                                                $selected_option = isset($product) ? $product->category_id : '';

                                                @endphp
                                                <option value="{{$category1->id}}" @if($category1->id==$selected_option){{'selected'}}@endif>{{$category1->title}}</option>
                                                @if(count($category1->subcategory))
                                                @include('admin.category.subCategoryList-option',['subcategories' => $category1->subcategory,'selected'=>$selected_option])
                                                @endif
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        @error('category_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select product*</label>
                                            <select type="text" id="product_id" name="aproduct_id" class="form-control">
                                                <option value="">None</option>
                                            </select>
                                        </div>
                                        @error('aproduct_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pdf_ordering">Order</label>
                                            <input name="accesories_ordering" value="" type="text" class="form-control" placeholder="number">
                                        </div>
                                        @error('pdf_ordering')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>



                                </div>






                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <input type="hidden" name="product_id" value="{{ isset($product)?$product->id:old('product_id') }}" />
                            <input type="hidden" name="product_slug" value="{{ isset($product)?$product->slug:old('product_id') }}" />
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</div>
<!-- /.content -->




@endsection

@section('js')
<script>
    $('#category_id').on('change', function() {
        //get the file name
        var category_id = $(this).val();
        $.ajax({
            url: "{{url('admin/product-accesories/get-product')}}/" + category_id,
            type: "get",
            //data: category_id,
            success: function(response) {
                console.log(response);
                $("#product_id").html(response);
            },
        });
    })
</script>
@endsection