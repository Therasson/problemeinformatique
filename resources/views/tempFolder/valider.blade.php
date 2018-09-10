@extends('layouts.core')

@section('title')
    Boutique | Panier
@endsection

@section('content')
    <div style="background-color: #00519e; margin-bottom: 35px;" class="px-3 py-3 pt-md-5 pb-md-4">
        <div class="container">
        </div>
    </div>

    <div class="container">
        <div class="card-deck mb-3">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Qté</th>
                        <th scope="col">Prix</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                    <tfooter>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfooter>
                </table>
                <div>
                    <a href="#" class="btn btn-danger">Retour à la boutique</a>
                    <a href="{{ url('passer-commande') }}" class="btn btn-primary pull-right">Passez commande</a>
                </div>
            </div>

        </div>
@endsection