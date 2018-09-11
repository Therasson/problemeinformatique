@extends('layouts.core')

@section('title')
    Boutique | Commande
@endsection

@section('content')
    <div style="background-color: #00519e; margin-bottom: 35px;" class="px-3 py-3 pt-md-5 pb-md-4">
        <div class="container">
        </div>
    </div>

    <div class="container">
        <div class="card-deck mb-3">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header"> Mes Adresses de livraison</div>
                    <div class="card-body">
                        <a href="{{ url('valider') }}" class="btn btn-danger"> Valider ma commande</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <h5>Ajouter une nouvelle adresse de livraison</h5>
                <form class="form-horizontal" action="">
                    <div class="form-group">
                        <label for="">Ville</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Situation géographique</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Enregistrer">
                    </div>
                </form>
            </div>
        </div>
@endsection