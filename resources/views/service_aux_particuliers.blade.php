@extends('layouts.core')

@section('title')
  Services aux particuliers
@stop

@section('content')
  <div style="background-color: #00519e; margin-bottom: 15px;" class="px-3 py-3 pt-md-5 pb-md-4">
    <div class="container">
      <!--breadcrumbs-->
    </div>
  </div>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Accueil</a></li>
      <li class="breadcrumb-item active" aria-current="page">Service aux particuliers</li>
    </ol>
  </nav>

  <div class="card-deck mb-3">
    <div class="col-md-5">
      {{ Html::image('assets/core/img/demande-atelier.png') }}
    </div>
    <div class="col-md-7">
      <h2>Service aux particuliers</h2>
      <p style="text-align: justify;">
        Vous avez un souci informatique et vous ne savez pas vers qui vous tourner ? Faites appel aux
        services de qualité à des prix très compétitifs, nous vous assurons dans les meilleurs délais la
        résolution de votre problème quelle que soit la nature. La qualité de nos services est reconnue. Nous
        pratiquons l’assistance ou le dépannage à distance, sur site ou en atelier et nous sommes à votre
        disposition pour tous vos soucis informatiques. AIDE NUMERIC vous simplifie la vie en vous
        apportant un service de qualité supérieure avec efficacité et rapidité..</p>
      <div class="card-deck mb-3 text-center btn-center">
        <a class="btn btn-danger"> Besoin d'aide? <br>Visitez notre boutique en ligne</a>
      </div>
    </div>
  </div>

@stop