@extends('layouts.main')
@section('content')
    <style>
        .center-card {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
    </style>

    <div class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                            <li class="active">Je me connecte</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content mb-50" style="">
        <div class="container">
            <div class="row center-card">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-8 mb-30">
                    <!-- Login Form -->
                    <form action="#">

                        <div class="login-form">
                            <h4 class="login-title">Login</h4>

                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Email Address*</label>
                                    <input class="mb-0" type="email" placeholder="Email Address">
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Password</label>
                                    <input class="mb-0" type="password" placeholder="Password">
                                </div>
                                <div class="col-md-8">

                                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me">Remember me</label>
                                    </div>

                                </div>

                                <div class="col-md-4 mt-10 mb-20 text-start text-md-end">
                                    <a href="#"> Forgotten pasward?</a>
                                </div>

                                <div class="col-md-12">
                                    <button class="register-button mt-0">Login</button>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
