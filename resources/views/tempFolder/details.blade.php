@extends('layouts.core')

@section('title')
    Boutique |
@endsection

@section('content')
    <div style="background-color: #00519e; margin-bottom: 35px;" class="px-3 py-3 pt-md-5 pb-md-4">
        <div class="container">
        </div>
    </div>

    <div class="container">
        <div class="card-deck mb-3">
            <div class="col-lg-6">
                <img style="width: 100%;" src="assets/core/img/1.png" alt="">
            </div>
            <div class="col-lg-5">
                <p>Lorem</p>
                <a href="{{ url('panier') }}" class="btn btn-success"> Ajouter au Panier</a>
            </div>
        </div>

@stop