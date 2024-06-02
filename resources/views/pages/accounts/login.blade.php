@extends('layouts.main')
@section('content')
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

    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-6 mb-30">
            @include('partials.notification')
        </div>
    </div>



    <div class="page-content mb-50">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-sm-12 col-md-6 col-xs-6 col-lg-6 mb-30">

                    <!-- Login Form -->
                    <form action="{{ route('store.login') }}" method="POST">
                        @csrf
                        <div class="login-form">
                            {{--  <h4 class="login-title" style="text-align: center">Bienvenue sur Transforma</h4>
                              --}}
                            <div class="logo">
                                <a href="/">
                                    <x-application-logo class="w-80 h-80 rounded-full" />
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Email*</label>
                                    <input class="mb-0" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Mot de passe</label>
                                    <input class="mb-0" type="password" name="password" placeholder="Mot de passe">
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-10 mb-20 text-start text-md-end">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}"> Mot de passe oublié?</a>
                                    @endif
                                </div>


                                <div class="col-md-12">
                                    <button type="submit" class="register-button mt-0">Connexion</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
