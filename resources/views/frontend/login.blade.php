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
                            <a class="breadcrumb-item" href="{{url('/')}}">Home</a>
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
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign
                In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">

                <div class="sign-in-htm">
                    <form method="post" action="{{url('user-auth/login')}}">
                        @csrf
                        <div class="messages"></div>
                        <div class="form-group">
                            <label>User Name</label>
                            <input id="form_name" type="text" name="username" class="form-control" value="{{old('username')}}">
                            @error('username')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="form_password" type="password" name="password" class="form-control">
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-4 mb-5">
                            <div class="remember-checkbox d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check1">
                                    <label class="form-check-label" for="check1">Remember me</label>
                                </div> <a class="btn-link" href="{{url('forgot-password')}}">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span> Keep me Signed in</label>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign In">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a href="#forgot">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn btn-theme"><span>Login Now</span></button>
                    </form>
                </div>
                <div class="sign-up-htm">
                    <form method="post" action="{{url('user-auth/register')}}">
                        @csrf
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input id="form_name" type="text" name="first_name" class="form-control" value="{{old('first_name')}}">
                                    @error('first_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input id="form_name" type="text" name="last_name" class="form-control" value="{{old('last_name')}}">
                                    @error('last_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input id="form_name" type="text" name="username" class="form-control" value="{{old('username')}}">
                                    @error('username')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="form_password" type="password" name="password" class="form-control">
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input id="form_password" type="password" name="password_confirmation" class="form-control">
                                    @error('password_confirmation')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>






                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input id="form_name" type="text" name="phone" class="form-control" value="{{old('phone')}}">
                                    @error('phone')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input id="form_name" type="text" name="email" class="form-control" value="{{old('email')}}">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-theme"><span>Register Now</span></button>
                    </form>

                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="{{url('login')}}">Already Member?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection