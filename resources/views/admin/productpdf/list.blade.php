@extends('layouts.admin_layout')
@section('content')
@section('title', 'Product Image')


<div class="main-content">

  <div class="page-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Product Image</h3>
              <a href="{{route('productpdf.create', ['product'=>$product->slug]  )}}"><button type="button" class="btn btn-success btn-flat float-right">Add Product PDF</button></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <table class="table table-bordered table-striped table-responsive">

                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>PDF Name</th>
                    <th>PDF</th>
                    <th>Ordering</th>
                    <th>Product Name </th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $slno = 1;  ?>
                  <tr>
                    @if($data->count()>0)
                    @foreach($data as $lists)
                    <td><?php echo $slno; ?></td>

                    <td>{{ $lists->pdf_name }}</td>

                    <td>
                      @if($lists->pdf != '')

                      <a href="{{asset($lists->pdf)}}"><i class="mdi mdi-file-pdf-box 2x" style="font-size: 34px;"></i></a>
                      @else
                      <!--<p>No Image added</p> -->
                      <p>@lang('backendmsg.proimage_view_msg_06')</p>
                      @endif
                    </td>

                    <!--<td>{{ $lists->product_lists_id }}</td>-->
                    <td>{{ $lists->pdf_ordering }}</td>
                    <td>{{ $product->title }}</td>


                    <td>
                      @if($lists->pdf_status ==1)
                      <a href="{{ route('productpdf.status', ['product'=>$product->slug, 'status'=>0,'id'=> $lists->id]) }}"><button type="button" class="btn btn-primary">Active</button></a>
                      @elseif($lists->pdf_status==0)
                      <a href="{{ route('productpdf.status', ['product'=>$product->slug, 'status'=>1,'id'=> $lists->id]) }}"><button type="button" class="btn btn-warning">Inactive</button></a>
                      @endif
                    </td>


                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-info waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Action
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{url('admin/product-pdf/edit/'.$lists->id.'?product='.$product->slug)}}">Edit</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <form action="{{url('admin/product-pdf/delete/'.$lists->id)}}" method="POST">
                              @method('DELETE')
                              @csrf
                              <!--<a class="dropdown-item" href="javascript:void(0)">Delete</a>-->
                              <button class="dropdown-item" type="submit">Delete</button>
                              <input type="hidden" name="product_slug" value="{{$product->slug}}" />
                            </form>
                          </li>
                        </ul>
                      </div>

                    </td>

                  </tr>
                  <?php $slno++; ?>
                  @endforeach
                  @else
                  <td colspan="8">No Image added yet</td>

                  @endif
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              {{$data->links()}}
              <ul class="pagination pagination-sm m-0 float-right">


              </ul>
            </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->
    </div>
  </div>
  @endsection