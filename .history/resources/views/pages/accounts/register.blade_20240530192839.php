@extends('layouts.main')
@section('content')
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

    @include('partials.notification')

    <div class="page-content mb-50">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-sm-12 col-md-6 col-xs-6 col-lg-6 mb-30">
                    <!-- Login Form -->
                    <form method="POST" action="{{ route('store.register') }}">
                        @csrf
                        <div class="login-form">
                            {{--  <h4 class="login-title" style="text-align:center">Inscription</h4>  --}}
                            <div class="logo">
                                <a href="/">
                                    <img width="50" height="50" src="{{ asset('assets/images/logo.webp') }}"
                                        class="img-fluid mb-4" style="text-items: center" alt="">
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Nom<span style="color:red">*</span></label>
                                    <input class="mb-0" type="text" name="last_name" placeholder="Prénom">
                                    @error('last_name')
                                        <div style="color:red;margin-top:2px">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Prénom<span style="color:red">*</span></label>
                                    <input class="mb-0" name="first_name" type="text" placeholder="Nom">
                                    @error('first_name')
                                        <div style="color:red;margin-top:2px">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-20">
                                    <label>Email<span style="color:red;margin-top:2px">*</span>
                                    </label>
                                    <input class="mb-0" name="email" type="email" placeholder="Email">
                                    @error('email')
                                        <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 col-12 mb-20">
                                    <label>City<span style="color:red">*</span></label>
                                    <input class="mb-0" name="city" type="text" placeholder="Ville">
                                    @error('city')
                                        <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 col-12 mb-20">
                                    <label>Contact<span style="color:red">*</span>
                                    </label>
                                    <input class="mb-0" name="contact" type="number" placeholder="Téléphone">
                                    @error('contact')
                                        <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-20">
                                    <label>Mot de passe<span style="color:red">*</span></label>
                                    <input class="mb-0" name="password" type="password" placeholder="Password">
                                    @error('password')
                                        <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Confirmation<span style="color:red">*</span> </label>
                                    <input class="mb-0" name="password_confirmation" type="password"
                                        placeholder="Confirm Password">

                                    @error('password_confirmation')
                                        <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 left-aligned-button">
                                    <button type="submit" class="register-button mt-0">Soumettre</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
