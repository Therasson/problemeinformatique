@extends('layouts.core')

@section('title')
    Demande d'intervention
@stop

@section('content')
    <div style="background-color: #00519e; margin-bottom: 15px;" class="px-3 py-3 pt-md-5 pb-md-4">
        <div class="container">
            <!--breadcrumbs-->
        </div>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    INTERVENTION A DISTANCE
                </div>
                <div class="card-body">
                    <img src="assets/core/img/demande-distance.png">
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Je demande</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    INTERVENTION SUR SITE
                </div>
                <div class="card-body">
                    <img src="assets/core/img/demande-site.png">
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Je demande</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    INTERVENTION EN ATELIER
                </div>
                <div class="card-body">
                    <img style="width: 100%;" src="assets/core/img/demande-atelier.png">
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Je demande</button>
                </div>
            </div>
        </div>
@stop