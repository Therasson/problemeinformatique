@extends('layouts.core')

@section('title')
    Achat de matériel
@stop

@section('content')
    <div style="background-color: #00519e; margin-bottom: 35px;" class="px-3 py-3 pt-md-5 pb-md-4">
        <div class="container">
        </div>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="col-lg-4">
                <a href="{{ url('achat-de-materiel/ordinateur-neuf')}}">
                    <div class="card mb-4 shadow-sm">
                        <div style="padding: 0px;" class="card-body">
                            <img src="assets/core/img/neuf.jpg" alt="" style="width: 100%;">
                        </div>
                        <div class="card-footer">
                            <h4 class="my-0 font-weight-normal">Ordinateur neuf</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">

                <a href="{{ url('achat-de-materiel/ordinateur-d-occasion')}}">
                    <div class="card mb-4 shadow-sm">
                        <div style="padding: 0px;" class="card-body">
                            <img style="margin-bottom:52px;" src="assets/core/img/occasion.jpg" alt="" style="width: 100%;">
                        </div>
                        <div class="card-footer">
                            <h4 class="my-0 font-weight-normal">Ordinateur d'occasion</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">

                <a href="{{ url('achat-de-materiel/accessoire')}}">
                    <div class="card mb-4 shadow-sm">
                        <div style="padding: 0px;" class="card-body">
                            <img src="assets/core/img/accessoire.jpg" alt="" style="width: 100%;">
                        </div>
                        <div class="card-footer">
                            <h4 class="my-0 font-weight-normal">Accessoire</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
@stop