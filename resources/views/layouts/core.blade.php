<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>AIDE NUMERIC ::. @yield('title') </title>
    <!-- Bootstrap core CSS -->
    {{ Html::style('assets/core/bootstrap/dist/css/bootstrap.min.css') }}
    {{ Html::style('assets/core/fontawesome/css/all.css') }}
</head>

<body>
<div class="container">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4">
        <img src="assets/core/img/logo.png" style="width: 150px;" class="my-0 mr-md-auto font-weight-normal">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <div style="margin-top:9px;margin-left:15px;">
                        <a class="" href="{{ url('/') }}">Accueil </a>
                    </div>
                    <div style="margin-top:9px;margin-left:15px;">
                        <a class="" href="{{ url('qui-sommes-nous') }}">Qui Sommes-nous?</a>
                    </div>
                    <div style="margin-top:9px;margin-left:15px;" class="dropdown">
                        <a href=""  class="dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item" href="{{ url('services-aux-particuliers') }}"> Services aux particuliers</a>
                            <a class="dropdown-item" href="{{ url('services-aux-entreprises') }}">Services aux entreprises</a>
                        </div>
                    </div>
                    <div style="margin-top:9px;margin-left:15px;" class="dropdown">
                        <a href="" class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Boutique
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <a class="dropdown-item" href="{{ url('demande-d-intervention') }}">Demande d'intervention</a>
                            <a class="dropdown-item" href="{{ url('achat-de-materiel') }}">Achat de matériel</a>
                        </div>
                    </div>

                    <div style="margin-top:9px;margin-left:15px;" class="dropdown">
                        <a href=""  class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Aide
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ url('foire-aux-questions') }}">FAQ</a>
                            <a class="dropdown-item" href="{{ url('base-de-connaissance') }}">Base de connaissance</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="container">

    @yield('content')

    <footer style="background-color: #272727;padding: 20px;" class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="assets/core/img/footer_logo.png" width="185px" alt="logo_aide_numeric">
            </div>
            <div class="col-6 col-md text-center">
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cocody-Angré</a></li>
                    <li><a class="text-muted" href="#">info@problemeinformatique.ci</a></li>
                    <li><a class="text-muted" href="#">+225 20 36 26 69 </a></li>
                    <li><a class="text-muted" href="#">+225 05 06 07 46</a></li>
                 </ul>
            </div>
            <div class="col-6 col-md">
                <table>
                    <tr>
                        <td><img style="width: 30px" src="assets/core/img/youtube.png" alt=""></td>
                        <td><img style="width: 30px; margin-left:15px;" src="assets/core/img/tweeter.png" alt=""></td>
                        <td><img style="width: 30px; margin-left:15px;" src="assets/core/img/in.png" alt=""></td>
                        <td><img style="width: 18px; margin-left:15px;" src="assets/core/img/face.png" alt=""></td>
                    </tr>
                </table>
            </div>
            <div class="col-6 col-md text-center">
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">AIDE NUMERIC 2018</a></li>
                    <li><a class="text-muted" href="#">DESIGNER PAR: <br> Mr Thera & Bossia</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
{{ Html::script('assets/core/bootstrap/assets/js/vendor/popper.min.js') }}
{{ Html::script('assets/core/bootstrap/dist/js/bootstrap.min.js') }}
{{ Html::script('assets/core/bootstrap/assets/js/vendor/holder.min.js') }}
{{ Html::script('assets/core/OwlCarousel/owl.carousel.js') }}
@yield('scripts')
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>

</body>
</html>
