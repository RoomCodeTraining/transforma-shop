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

                </div>
            </div>
        </div>
    </div>
@endsection
