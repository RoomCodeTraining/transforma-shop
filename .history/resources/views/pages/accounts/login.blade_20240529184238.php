@extends('layouts.main')
@section('content')
    <style>
        .center-card {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .page-content .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            /* Adjust the height as needed */
        }

        .page-content .row {
            width: 100%;
            justify-content: center;
        }

        .login-form {
            margin-top: -50px;
            /* Adjust the margin-top as needed */
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
    <div class="page-content mb-50">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-sm-12 col-md-6 col-xs-6 col-lg-6 mb-30">
                    <!-- Login Form -->
                    <form action="#">
                        <div class="login-form">
                            <h4 class="login-title" style="text-align: center">Bienvenue sur OgarForm</h4>
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
                                <div class="col-md-4 mt-10 mb-20 text-start text-lg-end">
                                    <a href="#"> Mot de passe oublié?</a>
                                </div>
                                <div class="col-md-12">
                                    <button class="register-button mt-0">Connexion</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
