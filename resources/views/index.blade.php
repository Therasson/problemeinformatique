@extends('layouts.core')

@section('title')
    Accueil
@stop

@section('content')
    <div style="background-color: #00519e; margin-bottom: 15px;" class="px-3 py-3 pt-md-5 pb-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 style="text-align: justify;color: #fff;">Des spécialistes vous attendent pour vous aider à regler vos problèmes informatiques</h3>
                    <p><a style="color: #000;" href="{{ url("en-savoir-plus") }}">En savoir plus</a></p>
                    <a style="margin-bottom: 10px;" href="{{ url('aidez-moi') }}" class="btn btn-danger btn-block">Aidez moi</a>
                    <div class="row">
                        <div class="col-md-6">
                            <img style="width: 265px;height: 90px;" src="assets/core/img/telediag-1.png">
                        </div>
                        <div class="col-md-6">
                            <img style="width: 240px;height: 90px;" src="assets/core/img/team2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="text-align: center;">
                    <img style="width: 350px;" src="assets/core/img/1.png">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <hr>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">ASSISTANCE</h4>
                </div>
                <div class="card-body">
                    <img src="assets/core/img/2.jpg" alt="" style="width: 100%;">
                </div>
            </div>
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Guider</h4>
                </div>
                <div class="card-body">
                    <p style="text-align:justify;">
                        Vous n’arrivez pas à réaliser une tâche sur votre PC, Tablette ou
                        Smartphone ? Nous donnons un coup de pouce en vous assistant dans la procédure à suivre ou en prenant en
                        main votre ordinateur pour réaliser la tâche
                    </p>
                </div>
            </div>
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Renseigner</h4>
                </div>
                <div class="card-body">
                    <p style="text-align: justify;">
                        Nous apportons une réponse adéquate à votre préoccupation lorsque vous rencontrez des difficultés pour retrouver une information dont vous aviez besoin pour résoudre un problème informatique
                </div>
            </div>
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Conseiller</h4>
                </div>
                <div class="card-body">
                    <p style="text-align: justify;">
                        Nous sommes à votre disposition pour tous vos besoins de conseils et d’avis d’un spécialiste pour vos projets technologiques (Achat d’équipements, abonnement internet, autres solutions technologiques)
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="card-deck mb-3 text-center">
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">DEPANNAGE</h4>
                </div>
                <div class="card-body">
                    <img src="assets/core/img/3.jpg" alt="" style="width: 100%;">
                </div>
            </div>
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Reparer</h4>
                </div>
                <div class="card-body">
                    <p style="text-align: justify;">
                        Votre équipement est défaillant ? Nous réalisons un diagnostic et rétablissons le fonctionnement normal de votre équipement>
                </div>
            </div>
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Installer</h4>
                </div>
                <div class="card-body">
                    <p style="text-align: justify;">
                        En cas d’acquisition de nouveaux équipements ou de logiciels, nous vous aidons à les mettre en fonction (installer, configurer et paramétrer)
                    </p>
                </div>
            </div>
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Optimiser</h4>
                </div>
                <div class="card-body">
                    <p style="text-align: justify;">
                        Nous assurons la maintenance préventive de vos équipements pour empêcher tout incident technique au moyen de la prévention (entretien régulier et vérification).
                    </p>
                </div>
            </div>
        </div>

        <div class="card-deck mb-3">
            <div class="card col-lg-8 shadow-sm">
                <div class="row">
                    <div class="text-center">
                        <h2>Nos services complementaires</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="erow">
                            <h5><i class="fa fa-user"></i> Conception</h5>
                            <p>Nous réalisons tous vos projets de conception :</p>
                            <ul>
                                <li>Site internet</li>
                                <li>Logiciel et application</li>
                                <li>Badge PVC</li>
                                <li>Identification de personne</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="erow">
                            <h5><i class="fa fa-user"></i> Installation</h5>
                            <p>Nous avons le savoir faire des installations  :</p>
                            <ul>
                                <li>Réseau informatique</li>
                                <li>Déploiement de système de vidéosurveillance</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="erow">
                            <h5><i class="fa fa-user"></i> Études & Audits</h5>
                            <p>Nous avons des experts pour faire l’étude et l’audit complet :</p>
                            <ul>
                                <li>Cahier des charges</li>
                                <li>Parc informatique</li>
                                <li>Projet informatique</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="erow">
                            <h5><i class="fa fa-user"></i> Bureautique</h5>
                            <p>Nous vous aidons dans vos travaux de bureautique:</p>
                            <ul>
                                <li>Traitement et mise en forme de texte</li>
                                <li>Réalisation de tableau Excel</li>
                                <li>Présentation Powerpoint</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="erow">
                            <h5><i class="fa fa-user"></i> Formation</h5>
                            <p>Nous faisons des formations sur l’utilisation basique de l’ordinateur :</p>
                            <ul>
                                <li>Windows</li>
                                <li>Word</li>
                                <li>Excel</li>
                                <li>Powerpoint</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="erow">
                            <h5><i class="fa fa-user"></i> Vente & Location de Matériel</h5>
                            <p>Nous vendons et mettons en location du matériel informatique:</p>
                            <ul>
                                <li>PC neuf ou d’occasion</li>
                                <li>Accessoires informatique</li>
                                <li>Vidéo projecteur</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="padding: 0;" class="card col-lg-4 shadow-sm">
                <img src="assets/core/img/4.jpg" style="height: 660px;" alt="">
            </div>
        </div>

        <div class="card-deck mb-3">
            <div class="container">
                <div class="owl-carousel">
                    <div class="col-md-9"> <img src="assets/core/img/telediag-1.png" alt=""></div>
                    <div class="col-md-9"> <img src="assets/core/img/telediag-1.png" alt=""></div>
                    <div class="col-md-9"> <img src="assets/core/img/telediag-1.png" alt=""></div>
                    <div class="col-md-9"> <img src="assets/core/img/telediag-1.png" alt=""></div>
                    <div class="col-md-9"> <img src="assets/core/img/telediag-1.png" alt=""></div>
                    <div class="col-md-9"> <img src="assets/core/img/telediag-1.png" alt=""></div>

                </div>
            </div>

        </div>
        @endsection


        @section('scripts')
            <script>
                $(document).ready(function(){
                    $(".owl-carousel").owlCarousel({
                        autoplay:true,
                        autoplayTimeout:1000,
                        autoplayHoverPause:true
                    });
                });
                $('.play').on('click',function(){
                    owl.trigger('play.owl.autoplay',[1000])
                })
                $('.stop').on('click',function(){
                    owl.trigger('stop.owl.autoplay')
                });
            </script>
    {{--<script>--}}
    {{--$(document).ready(function(){--}}
    {{--var owl = $('.owl-carousel');--}}
    {{--owl.owlCarousel({--}}
    {{--items:4,--}}
    {{----}}
    {{--margin:10,--}}
    {{----}}
    {{--,--}}
    {{----}}
    {{--});--}}
    {{--});--}}
    {{--</script>--}}
@endsection