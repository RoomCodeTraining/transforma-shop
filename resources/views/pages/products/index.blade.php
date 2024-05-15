@extends('layouts.main')
@section('content')
    <div class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="index.html"><i class="fa fa-home"></i> Accueil</a></li>
                            <li><a href="#">{{ $product->category->name }}</a></li>
                            <li><a href="#">Fast Foods</a></li>
                            <li class="active">Cillum dolore tortor nisl fermentum</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
