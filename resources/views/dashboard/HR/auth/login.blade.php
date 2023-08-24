@extends('dashboard.HR.auth.includes.master')

@section('title')
    login
@stop

@section('content')
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-3"></div>

            <!-- The content -->
            <div class="col-md-6">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">
                                    <div class="mb-5 d-flex"> <a href="index.html"><img src="../../assets/img/brand/favicon.png" class="sign-favicon ht-40" alt="logo"></a><h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">Va<span>le</span>x</h1></div>
                                    <div class="card-sigin">
                                        <div class="main-signup-header">
                                            <h2>{{trans('auth/login.welcome')}}</h2>
                                            <h5 class="font-weight-semibold mb-4">{{trans('auth/login.sign_in')}}</h5>

                                            @if ($errors->any())
                                                @include('errors.error')
                                            @endif


                                            <form action="{{route('login')}}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label>{{trans('auth/login.Email')}}</label> <input name="email" class="form-control" placeholder="Enter your email" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>{{trans('auth/login.password')}}</label> <input name="password" class="form-control" placeholder="Enter your password" type="password">
                                                </div><button type="submit" class="btn btn-main-primary btn-block">{{trans('auth/login.send_signin')}}</button>
                                                <div class="row row-xs">
                                                    <div class="col-sm-6">
                                                        <button class="btn btn-block"><i class="fab fa-facebook-f"></i> Signup with Facebook</button>
                                                    </div>
                                                    <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                                        <button class="btn btn-info btn-block"><i class="fab fa-twitter"></i> Signup with Twitter</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="main-signin-footer mt-5">
                                                <p><a href="">Forgot password?</a></p>
                                                <p>Don't have an account? <a href="page-signup.html">Create an Account</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->

            <div class="col-md-3"></div>
        </div>
    </div>

@stop


