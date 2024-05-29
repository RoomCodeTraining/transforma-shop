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
                            <li class="active">Inscription</li>
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
                            <h4 class="login-title" style="text-align:center">Inscription</h4>

                            <div class="row">
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Nom</label>
                                    <input class="mb-0" type="text" placeholder="First Name">
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Prénom</label>
                                    <input class="mb-0" type="text" placeholder="Last Name">
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Email*</label>
                                    <input class="mb-0" type="email" placeholder="Email Address">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Mot de passe</label>
                                    <input class="mb-0" type="password" placeholder="Password">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Confirmation </label>
                                    <input class="mb-0" type="password" placeholder="Confirm Password">
                                </div>
                                <div class="col-12 text-start text-md-end">
                                    <button class="register-button mt-0">Register</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
