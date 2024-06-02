@extends('layouts.main')
@section('content')
    <div class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                            <li class="active">Tableau de bord</li>
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


    <div class="my-account-section section position-relative mb-50 fix">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="row">

                        <!-- My Account Tab Menu Start -->
                        <div class="col-lg-3 col-12">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-bs-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Tableau de bord</a>

                                <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Mes
                                    commandes</a>

                                {{--  <a href="#download" data-bs-toggle="tab"><i class="fa fa-cloud-download"></i> Download</a>  --}}

                                {{--  <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Payment
                                    Method</a>  --}}

                                {{--  <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i> address</a>  --}}

                                <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Mon profile</a>

                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Mon espace</h3>

                                        <div class="welcome">
                                            <p>Bienvenue , <strong>{{ auth()->user()->full_name }}</strong> </p>
                                        </div>

                                        <p class="mb-0">Depuis votre tableau de bord, vous pouvez facilement
                                            vérifier,visualiser vos commandes récentes, mettre à jour votre profil et
                                            modifier votre mot de passe .</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Mes commandes</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Ref</th>
                                                        <th>Name</th>
                                                        <th>Quantité</th>
                                                        <th>Prix</th>
                                                        <th>Paiement</th>
                                                        <th>Status</th>
                                                        <th>Date</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($order as $value)
                                                        @foreach ($value->items as $key)
                                                            <tr>
                                                                <td>{{ $value->reference }}</td>
                                                                <td>{{ $key->product->name }}</td>
                                                                <td>{{ $key->quantity }}</td>
                                                                <td>{{ $key->price }}</td>
                                                                <td>{{ $value->transaction->mode }}</td>

                                                                @if ($value->status == 'ordered')
                                                                    <td><span style="color:green">Commande
                                                                            validée</span></td>
                                                                            @elseif($value->status == 'delivered')
                                                                            <td><span style="color:green">Commande
                                                                                validée</span></td>
                                                                                @else
                                                                                <td><span style="color:green">Commande
                                                                                    validée</span></td>
                                                                @endif

                                                                {{--  <td>{{ $value->created_at }}</td>  --}}
                                                                <td>{{ $value->created_at->format('d/m/Y') }}</td>
                                                            </tr>
                                                        @endforeach
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="download" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Downloads</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Date</th>
                                                        <th>Expire</th>
                                                        <th>Download</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>Mostarizing Oil</td>
                                                        <td>Aug 22, 2022</td>
                                                        <td>Yes</td>
                                                        <td><a href="#" class="btn">Download File</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Katopeno Altuni</td>
                                                        <td>Sep 12, 2022</td>
                                                        <td>Never</td>
                                                        <td><a href="#" class="btn">Download File</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->

                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->

                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">

                                        <div class="account-details-form">
                                            <h3>Mon profile</h3>
                                            <form action="{{ route('profile.update') }}" method="post">
                                                @csrf
                                                @method('patch')
                                                <div class="row">
                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="first-name" name="last_name"
                                                            value="{{ $profile->last_name }}" placeholder="Nom"
                                                            type="text">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="last-name" name="first_name" placeholder="Prénom"
                                                            value="{{ $profile->first_name }}" type="text">
                                                    </div>

                                                    <div class="col-12 mb-30">
                                                        <input id="email" value="{{ $profile->email }}"
                                                            placeholder="email" name="email" type="email">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="contact" name="contact" placeholder="contact"
                                                            value="{{ $profile->contact }}" type="text">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="city" placeholder="Ville" name="city"
                                                            value="{{ $profile->city }}" type="text">
                                                    </div>



                                                    <div class="col-12">
                                                        <button type="submit" class="save-change-btn">Mettre à
                                                            jour</button>
                                                    </div>

                                                </div>
                                            </form>
                                            <hr />
                                            <form action="{{ route('form.change') }}" method="post">
                                                @csrf
                                                @method('put')
                                                <div class="row">
                                                    <div class="col-12 mb-30">
                                                        <h4>Modification du password</h4>
                                                    </div>

                                                    <div class="col-12 mb-30">
                                                        <input id="current-pwd" name="current_password"
                                                            placeholder="Current Password" required type="password">

                                                        @error('current_password')
                                                            <div style="color:red;margin-top:2px">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="new-pwd" name="new_password"
                                                            placeholder="New Password" required type="password">

                                                        @error('new_password')
                                                            <div style="color:red;margin-top:2px">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="confirm-pwd" name="confirm_password"
                                                            placeholder="Confirm Password" required type="password">
                                                        @error('confirm_password')
                                                            <div style="color:red;margin-top:2px">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-12">
                                                        <button type="submit" class="save-change-btn"> Modifier</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
