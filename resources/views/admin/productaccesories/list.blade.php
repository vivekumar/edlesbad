@extends('layouts.admin_layout')
@section('content')
@section('title', 'Product Accesories')


<div class="main-content">

  <div class="page-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Product Accesories</h3>
              <a href="{{route('productaccesories.create', ['product'=>$product->slug]  )}}"><button type="button" class="btn btn-success btn-flat float-right">Add Product Accesories</button></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <table class="table table-bordered table-striped table-responsive">

                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Product Name</th>
                    <th>Ordering</th>
                    {{--<th>Status</th>--}}
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $slno = 1;  ?>
                  <tr>
                    @if($data->count()>0)
                    @foreach($data as $lists)

                    @php

                    @endphp

                    <td><?php echo $slno; ?></td>

                    <td>{{ $lists->product->title }}</td>

                    <!--<td>{{ $lists->product_lists_id }}</td>-->
                    <td>{{ $lists->accesories_ordering }}</td>



                    {{--<td>
                      @if($lists->pdf_status ==1)
                      <a href="{{ route('productaccesories.status', ['product'=>$product->slug, 'status'=>0,'id'=> $lists->id]) }}"><button type="button" class="btn btn-primary">Active</button></a>
                    @elseif($lists->pdf_status==0)
                    <a href="{{ route('productaccesories.status', ['product'=>$product->slug, 'status'=>1,'id'=> $lists->id]) }}"><button type="button" class="btn btn-warning">Inactive</button></a>
                    @endif
                    </td>--}}


                    <td>
                      <div class="btn-group">
                        <form action="{{url('admin/product-accesories/delete/'.$lists->id)}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <!--<a class="dropdown-item" href="javascript:void(0)">Delete</a>-->
                          <button class="btn btn-info waves-light " type="submit">Delete</button>
                          <input type="hidden" name="product_slug" value="{{$product->slug}}" />
                        </form>
                        {{--<button type="button" class="btn btn-info waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Action
                        </button>
                        <ul class="dropdown-menu">

                          <li>
                            <form action="{{url('admin/product-accesories/delete/'.$lists->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <!--<a class="dropdown-item" href="javascript:void(0)">Delete</a>-->
                        <button class="dropdown-item" type="submit">Delete</button>
                        <input type="hidden" name="product_slug" value="{{$product->slug}}" />
                        </form>
                        </li>
                        </ul>--}}
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