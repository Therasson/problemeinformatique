@extends('layouts.core')

@section('title')
    Services aux entreprises
@stop

@section('content')
    <div style="background-color: #00519e; margin-bottom: 15px;" class="px-3 py-3 pt-md-5 pb-md-4">
        <div class="container">
            <!--breadcrumbs-->
        </div>
    </div>

    <div class="container">
        <div class="card-deck mb-3">
            <div class="container">
                <div class="row">
                    <p>Nos experts comprennent les besoins de votre entreprise et vous assistent pour que vous profitiez d'une informatique fiable et performante.
                    </p>
                    <p>Des contrats adaptés à votre entreprise pour vous garantir une informatique évolutive, sure et
                        performante.
                    </p>
                    <br>
                    <br>
                    <br>
                    <div class="col-md-8">

                        <p style="text-align: right"> Formulaire de contact</p>
                        <table class="table-bordered table">
                            <thead>
                            <td style="border-left-color: #fff;border-top-color: #fff;">&nbsp;</td>
                            <td style="text-align: center">MEGA PRO <br> 50 000F</td>
                            <td style="text-align: center">GIGA PRO <br> 100 000F</td>
                            <td style="text-align: center">TERA PRO <br> 150 000F</td>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Nombre de machine</td>
                                <td style="background-color: #ededed;"></td>
                                <td style="background-color: #cccccc;"></td>
                                <td style="background-color: #999999;"></td>
                            </tr>
                            <tr>
                                <td>Prise en charge des périphériques et accessoires</td>
                                <td style="background-color: #ededed;"></td>
                                <td style="background-color: #cccccc;"></td>
                                <td style="background-color: #999999;"></td>
                            </tr>
                            <tr>
                                <td>Prise en main à distance</td>
                                <td style="background-color: #ededed;"></td>
                                <td style="background-color: #cccccc;"></td>
                                <td style="background-color: #999999;"></td>
                            </tr>
                            <tr>
                                <td>Type de problèmes</td>
                                <td style="background-color: #ededed;"></td>
                                <td style="background-color: #cccccc;"></td>
                                <td style="background-color: #999999;"></td>
                            </tr>
                            <tr>
                                <td>Temps de traitement</td>
                                <td style="background-color: #ededed;"></td>
                                <td style="background-color: #cccccc;"></td>
                                <td style="background-color: #999999;"></td>
                            </tr>
                            <tr>
                                <td>Nombre de visite</td>
                                <td style="background-color: #ededed;"></td>
                                <td style="background-color: #cccccc;"></td>
                                <td style="background-color: #999999;"></td>
                            </tr>
                            <tr>
                                <td>Remise exclusive sur le matériel et les consommables</td>
                                <td style="background-color: #ededed;"></td>
                                <td style="background-color: #cccccc;"></td>
                                <td style="background-color: #999999;"></td>
                            </tr>
                            <tr>
                                <td>Hotline</td>
                                <td style="background-color: #ededed;"></td>
                                <td style="background-color: #cccccc;"></td>
                                <td style="background-color: #999999;"></td>
                            </tr>
                            <tr>
                                <td>Assurance</td>
                                <td style="background-color: #ededed;"></td>
                                <td style="background-color: #cccccc;"></td>
                                <td style="background-color: #999999;"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-3">
                        {{ Html::image('assets/core/img/Image4.jpg') }}
                        <button class="btn btn-danger btn-block"> Contactez nous</button>
                    </div>
                </div>
            </div>
        </div>
@stop