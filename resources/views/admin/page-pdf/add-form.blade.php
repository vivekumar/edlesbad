@extends('layouts.admin_layout')
@section('content')
@section('title', 'Add Brochures')


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
                            <h4 class="card-title mb-0 flex-grow-1">@if(isset($partner)) Edit @else Add @endif Brochures</h4>

                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">

                                @if (session('msg'))
                                <div class="alert alert-{{ session('msg_type') }}" role="alert">
                                    {{ session('msg') }}
                                </div>
                                @endif


                                <form method="post" action="{{url('admin/pdf/save')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-4">


                                        <div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="title" class="form-label">Name</label>
                                                <input type="text" class="form-control" name="title" value="{{ isset($pdf)?$pdf->title:old('title') }}">
                                            </div>
                                            @error('title')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        {{--<div class="col-xxl-4 col-md-4">
                                            <div>
                                                <label for="url" class="form-label">URL</label>
                                                <input type="url" class="form-control" name="url" value="{{ isset($pdf)?$pdf->url:old('url') }}">
                                    </div>
                                    @error('url')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                            </div>--}}

                            <div class="col-xxl-4 col-md-4">
                                <div>
                                    <label for="image" class="form-label">Logo</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                @error('image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-xxl-4 col-md-4">
                                <div>
                                    <label for="pdf" class="form-label">PDF</label>
                                    <input type="file" class="form-control" name="pdf">
                                </div>
                                @error('pdf')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-xxl-4 col-md-4">
                                <div>
                                    <label for="name" class="form-label">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="" @if(isset($pdf) && $pdf->status == '') {{"selected"}} @endif>--Select--</option>
                                        <option value="1" @if(isset($pdf) && $pdf->status == 1) {{"selected"}} @endif selected="">Active</option>
                                        <option value="0" @if(isset($pdf) && $pdf->status == 0) {{"selected"}} @endif>Inactive</option>
                                    </select>

                                    @error('status')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

                                </div>
                            </div>

                            @if(isset($pdf))
                            <div class="col-xxl-4 col-md-4">
                                <div>
                                    <label for="image" class="form-label">Old Image</label>
                                    <img src="{{URL::asset($pdf->image)}}" style="height: 120px; width: 120px;">
                                </div>

                            </div>
                            @endif
                            @if(isset($pdf) && !empty($pdf->pdf))
                            <div class="col-xxl-4 col-md-4">
                                <div>
                                    <label for="image" class="form-label"></label>
                                    <a href="{{URL::asset($pdf->pdf)}}" download>Download PDF</a>
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
                                    <input type="hidden" name="old_image" value="{{ isset($pdf)?$pdf->image:old('old_image') }}">
                                    <input type="hidden" name="pdf_id" value="{{ isset($pdf)?$pdf->id:old('pdf_id') }}">
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



@stop