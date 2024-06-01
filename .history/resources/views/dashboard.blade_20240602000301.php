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
                                            vérifier et visualiser vos commandes récentes, gérer vos adresses de livraison
                                            et de facturation et modifier votre mot de passe et les détails de votre
                                            compte.</p>
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
                                                        <th>No</th>
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
                                                                @endif

                                                                <td>{{ $value->created_at }}</td>

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
                                        <h3>Mon profile</h3>

                                        <div class="account-details-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="first-name" value="{{ $profile->last_name }}"
                                                            placeholder="Nom" type="text">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="last-name" placeholder="Prénom"
                                                            value="{{ $profile->first_name }}" type="text">
                                                    </div>

                                                    <div class="col-12 mb-30">
                                                        <input id="email" value="{{ $value->email }}"
                                                            placeholder="email" type="email">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="contact" placeholder="contact"
                                                            value="{{ $profile->contact }}" type="text">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="city" placeholder="Ville"
                                                            value="{{ $profile->city }}" type="text">
                                                    </div>

                                                    <div class="col-12 mb-30">
                                                        <h4>Password change</h4>
                                                    </div>

                                                    <div class="col-12 mb-30">
                                                        <input id="current-pwd" placeholder="Current Password"
                                                            type="password">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="new-pwd" placeholder="New Password" type="password">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="confirm-pwd" placeholder="Confirm Password"
                                                            type="password">
                                                    </div>

                                                    <div class="col-12">
                                                        <button class="save-change-btn">Save Changes</button>
                                                    </div>

                                                </div>
                                            </form>

                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-12 mb-30">
                                                        <h4>Password change</h4>
                                                    </div>

                                                    <div class="col-12 mb-30">
                                                        <input id="current-pwd" placeholder="Current Password"
                                                            type="password">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="new-pwd" placeholder="New Password" type="password">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="confirm-pwd" placeholder="Confirm Password"
                                                            type="password">
                                                    </div>

                                                    <div class="col-12">
                                                        <button class="save-change-btn">Save Changes</button>
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
