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
              <a href="{{route('productimage.create', ['product'=>$productlist[0]->slug]  )}}"><button type="button" class="btn btn-success btn-flat float-right">Add Product Image</button></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <table class="table table-bordered table-striped table-responsive">

                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Image Name</th>
                    <th>Image</th>
                    <th>Ordering</th>
                    <th>Product Name </th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $slno = 1;  ?>
                  <tr>
                    @if($productimage->count()>0)
                    @foreach($productimage as $lists)
                    <td><?php echo $slno; ?></td>

                    <td>{{ $lists->image_name }}</td>

                    <td>
                      @if($lists->image != '')
                      <a href="{{asset('storage/products/'.$lists->image)}}"><img src="{{asset('storage/products/'.$lists->image)}}" width="50" height="50" /></a>
                      @else
                      <!--<p>No Image added</p> -->
                      <p>@lang('backendmsg.proimage_view_msg_06')</p>
                      @endif
                    </td>

                    <!--<td>{{ $lists->product_lists_id }}</td>-->
                    <td>{{ $lists->image_ordering }}</td>
                    <td>{{ $productlist[0]->name }}</td>


                    <td>
                      @if($lists->images_status ==1)
                      <a href="{{ route('productimage.status', ['product'=>$productlist[0]->slug, 'status'=>0,'id'=> $lists->id]) }}"><button type="button" class="btn btn-primary">Active</button></a>
                      @elseif($lists->images_status==0)
                      <a href="{{ route('productimage.status', ['product'=>$productlist[0]->slug, 'status'=>1,'id'=> $lists->id]) }}"><button type="button" class="btn btn-warning">Inactive</button></a>
                      @endif
                    </td>


                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-info waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Action
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{route('productimage.edit',[$lists->id, 'product'=>$productlist[0]->slug ] )}}">Edit</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li>
                            <form action="{{route('productimage.destroy', $lists->id)}}" method="POST">
                              @method('DELETE')
                              @csrf
                              <!--<a class="dropdown-item" href="javascript:void(0)">Delete</a>-->
                              <button class="dropdown-item" type="submit">Delete</button>
                              <input type="hidden" name="product_slug" value="{{$productlist[0]->slug}}" />
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