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
                            <h3 class="card-title">Add PDF</h3>
                        </div>
                        <!-- /.card-header -->
                        @if (session('msg'))
                        <div class="alert alert-{{ session('msg_type') }}" role="alert">
                            {{ session('msg') }}
                        </div>
                        @endif

                        <!-- form start -->
                        <form action="{{route('productpdf.save')}}" method="post" enctype="multipart/form-data">

                            <!--<input type="hidden" name="_method" value="PUT"> -->
                            @csrf
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pdf_name">Name</label>
                                            <input name="pdf_name" value="{{ isset($productpdf)?$productpdf->pdf_name:old('pdf_name') }}" type="text" class="form-control" placeholder="Name">
                                        </div>
                                        @error('pdf_name')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pdf_ordering">Order</label>
                                            <input name="pdf_ordering" value="{{ isset($productpdf)?$productpdf->pdf_ordering:old('pdf_ordering') }}" type="text" class="form-control" placeholder="number">
                                        </div>
                                        @error('pdf_ordering')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pdf">PDF</label>
                                            <div id="pdf"></div><br />
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="product_pdf" id="pdf">

                                                </div>
                                            </div>
                                        </div>
                                        @error('product_pdf')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        @if(isset($productpdf))
                                        <a href="{{asset($productpdf->pdf)}}"><i class="mdi mdi-file-pdf-box 2x" style="font-size: 54px;"></i></a>
                                        @endif
                                    </div>
                                </div>






                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <input type="hidden" name="pdf_id" value="{{ isset($productpdf)?$productpdf->id:old('pdf_id') }}" />
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

@section('js_script')
<script>
    $('#product_image').on('change', function() {
        //get the file name
        var fileName = $(this).val();
        //var fileName = input.files[0].name;
        //replace the "Choose a file" label
        $(this).next('#pro_image_name').html(fileName);
    })


    function imagePreview(fileInput) {
        if (fileInput.files && fileInput.files[0]) {
            var fileReader = new FileReader();
            fileReader.onload = function(event) {
                $('#pro_image_preview').html('<img src="' + event.target.result + '" width="70px" height="70px"/>');
            };
            fileReader.readAsDataURL(fileInput.files[0]);
        }
    }
    $("#product_image").change(function() {
        imagePreview(this);
    });
</script>
@endsection