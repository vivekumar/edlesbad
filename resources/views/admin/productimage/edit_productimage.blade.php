@extends('layouts.admin_layout')
@section('content')
@section('title', 'Edit Product image')


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
              <h3 class="card-title">Edit Image</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('productimage.update', $product_image[0]->id)}}" method="post" enctype="multipart/form-data">

              <input type="hidden" name="_method" value="PUT">
              @csrf
              <div class="card-body">

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="product_image_name">Name</label>
                      <input name="product_image_name" id="product_image_name" type="text" class="form-control" placeholder="@lang('backendmsg.proimage_addview_msg_01')" value="{{$product_image[0]->image_name}}">
                    </div>
                    @error('product_image_name')
                    <div class="alert alert-danger" role="alert">
                      {{$message}}
                    </div>
                    @enderror
                  </div>


                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="product_ordering">Order</label>
                      <input name="product_ordering" id="product_ordering" type="text" class="form-control" placeholder="@lang('backendmsg.proimage_addview_msg_03')" value="{{$product_image[0]->image_ordering}}">
                    </div>
                    @error('product_ordering')
                    <div class="alert alert-danger" role="alert">
                      {{$message}}
                    </div>
                    @enderror
                  </div>

                  <div class="col-md-12">
                    @if($product_image[0]->image != '')
                    <div id="pro_image_preview">
                      <a href="{{asset('storage/products/'.$product_image[0]->image)}}"><img src="{{asset('storage/products/'.$product_image[0]->image)}}" width="50" height="50" /></a>
                    </div></br>
                    @else
                    <p>No document uploaded</p>
                    @endif
                    <div class="form-group">
                      <div id="pro_image_preview"></div><br />
                      <label for="exampleInputFile">Image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="product_image" id="product_image">
                        </div>
                      </div>
                    </div>
                    @error('product_image')
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

              <input type="hidden" name="product_slug" value="{{$product_slug}}" />
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