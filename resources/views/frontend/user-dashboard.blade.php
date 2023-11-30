@extends('frontend/layout/layout')
@section('page_title', 'Admin Dashboard')
@section('container')
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner">
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="index.php">Home</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                            <span class="breadcrumb-item active">Produkte</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Product Grid -->
<section class="htc__blog__details bg__white ptb--100">
    <div class="container">
        <!-- Nav tabs -->
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <div class="user-image">
                    <div class="img-cnt">
                        <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bWFufGVufDB8fDB8fHww" alt="" width="100" height="100">
                        <h4>Raj Kumar</h4>
                        <a href="">rajkumar@gmail.com</a>
                    </div>
                </div>

                <ul class="nav nav-tabs nav-stacked" role="tablist" style="display: contents;">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home">
                            <i class="fa fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="order-tab" data-bs-toggle="tab" href="#order">
                            <i class="fa fa-user"></i> Order
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="account-tab" data-bs-toggle="tab" href="#account">
                            <i class="fa fa-envelope"></i> Account Details
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="settings-tab" data-bs-toggle="tab" href="#settings">
                            <i class="fa fa-cog"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Tab panes -->
            <div class="col-sm-9 col-md-9">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="home">
                        <div class="panel-heading">
                            <h2>Dashboard</h2>
                        </div>
                        <hr>
                        <div class="user-content">
                            <p class="mb-0">
                                Hello <span>Amir </span> (not <span>Amir </span>? <a href="#" class="text-primary">Log
                                    out</a>)
                            </p>
                            <p class="mb-8">
                                From your account dashboard you can view your <a href="#" class="link-to-tab text-primary">recent orders</a>, manage your shipping and billing
                                addresses,<br>and edit your password and account details.
                            </p>
                            <a href="" class="btn btn-success">Go To Shop</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="order">
                        <div class="panel-heading">
                            <h2>Order Details</h2>
                        </div>
                        <hr>
                        <div class="user-content">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Order</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Lampo</td>
                                        <td>$220.00</td>
                                        <td>Processing</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Lampo</td>
                                        <td>$220.00</td>
                                        <td>Processing</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="account">
                        <div class="panel-heading">
                            <h2>Account Details</h2>
                        </div>
                        <hr>
                        <div class="user-content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firsr"> First Name</label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="last"> Last Name</label>
                                        <input type="text" class="form-control" name="" id="last">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="mobile"> Mobile Number</label>
                                        <input type="number" class="form-control" name="" id="mobile">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email"> Email</label>
                                        <input type="text" class="form-control" name="" id="email">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="passc"> Current Password</label>
                                        <input type="password" class="form-control" name="" id="passc">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="npass"> New password</label>
                                        <input type="password" class="form-control" name="" id="npass">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cpass"> Confirm new password</label>
                                        <input type="password" class="form-control" name="" id="cpass">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <a href="" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-success">Save Changes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="settings">
                    <h2>Settings Content Goes Here</h2>
                </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection