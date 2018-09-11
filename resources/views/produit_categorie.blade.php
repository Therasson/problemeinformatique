@extends('layouts.core')

@section('title')
    {{ $title }}
@stop

@section('content')
    <div style="background-color: #00519e; margin-bottom: 15px;" class="px-3 py-3 pt-md-5 pb-md-4">
        <div class="container">
            <!-- breadcrumbs -->
        </div>
    </div>
    <div class="container">
        {{--@foreach($categories as $categorie)
            @foreach($categorie->produits as $produit)--}}
                <div class="col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="../assets/core/img/1.png" alt="Card image cap">
                        <div class="card-body">
                            <p style="font-weight: bold;" class="card-text">
                                produit name
                            </p>
                            <a href="{{ url('details-produits') }}" class="btn btn-primary btn-sm">voir plus</a>
                            <a href="#" class="btn btn-danger pull-right btn-sm"><i class="fa fa-shopping-basket"></i></a>
                        </div>
                    </div>
                </div>
            {{--@endforeach
        @endforeach--}}
    </div>
@endsection