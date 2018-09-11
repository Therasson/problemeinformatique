@extends('layouts.core')

@section('title')
    Aidez moi
@stop

@section('content')
    <div style="background-color: #00519e; margin-bottom: 15px;" class="px-3 py-3 pt-md-5 pb-md-4">
        <div class="container">
            <!-- breadcrumbs -->
        </div>
    </div>

    <div class="container">
        <div class="card-deck mb-3">
            <div class="col-md-8">
                <h3>Besoin d'aide? <small>Laissez nous un message</small></h3>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label>Nom et prenoms</label>
                        <input type="text" name="" class="form-control" placeholder="Votre nom ici">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="" class="form-control" placeholder="Votre email ici">
                    </div>
                    <div class="form-group">
                        <label>Objet</label>
                        <input type="text" name="" class="form-control" placeholder="Votre objet ici">
                    </div>
                    <div class="form-group">
                        <label>Votre message ici</label>
                        <textarea name="" class="form-control" placeholder="Votre message ici"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="">
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
@stop