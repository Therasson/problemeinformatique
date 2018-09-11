<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AIDE NUMERIC - ADMINISTRATION</title>
{{ Html::style('assets/admin/css/bootstrap.min.css') }}
{{ Html::style('assets/admin/css/font-awesome.min.css') }}
{{ Html::style('assets/admin/css/datepicker3.css') }}
{{ Html::style('assets/admin/css/styles.css') }}

<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span></button>
			<a class="navbar-brand" href="#"><span>Aide </span>Numeric</a>
			<ul class="nav navbar-top-links navbar-right">
				<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
					<ul class="dropdown-menu dropdown-messages">
						<li>
							<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
								</a>
								<div class="message-body"><small class="pull-right">3 mins ago</small>
									<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
							</div>
						</li>
						<li class="divider"></li>
						<li>
							<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
								</a>
								<div class="message-body"><small class="pull-right">1 hour ago</small>
									<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
							</div>
						</li>
						<li class="divider"></li>
						<li>
							<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
						</li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
					<ul class="dropdown-menu dropdown-alerts">
						<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
						<li class="divider"></li>
						<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						<li class="divider"></li>
						<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<div class="profile-sidebar">
		<div class="profile-userpic">
			<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
		</div>
		<div class="profile-usertitle">
			<div class="profile-usertitle-name">Username</div>
			<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="divider"></div>
	<form role="search">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search">
		</div>
	</form>
	<ul class="nav menu">
		<li class="active"><a href="{{ url('admin') }}"><em class="fa fa-dashboard">&nbsp;</em> Accueil</a></li>

		<li class="parent "><a data-toggle="collapse" href="#sub-item-categorie">
				<em class="fa fa-navicon">&nbsp;</em> Catégories <span data-toggle="collapse" href="#sub-item-categorie" class="icon pull-right"><em class="fa fa-plus"></em></span>
			</a>
			<ul class="children collapse" id="sub-item-categorie">
				<li><a class="" href="{{ route('categorie.create') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Ajouter
					</a></li>
				<li><a class="" href="{{ route('categorie.index') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Liste
					</a></li>
			</ul>
		</li>
		<li class="parent "><a data-toggle="collapse" href="#sub-item-commande">
				<em class="fa fa-trash">&nbsp;</em> Commandes <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
			</a>
			<ul class="children collapse" id="sub-item-commande">
				<li><a class="" href="{{ url('admin/commande/new') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Nouvelles
					</a></li>
				<li><a class="" href="{{ url('admin/commande/en-cours') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> En cours
					</a></li>
				<li><a class="" href="{{ url('admin/commande/livree') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Livrées
					</a></li>
			</ul>
		</li>
		<li class="parent "><a data-toggle="collapse" href="#sub-item-produit">
				<em class="fa fa-calendar">&nbsp;</em> Produits <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
			</a>
			<ul class="children collapse" id="sub-item-produit">
				<li><a class="" href="{{ route('produit.create') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Ajouter
					</a></li>
				<li><a class="" href="{{ route('produit.index') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Liste
					</a></li>
			</ul>
		</li>
		<li class="parent "><a data-toggle="collapse" href="#sub-item-base">
				<em class="fa fa-trash">&nbsp;</em> B.de connaissance <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
			</a>
			<ul class="children collapse" id="sub-item-base">
				<li><a class="" href="{{ route('base-de-connaissance.create') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Ajouter
					</a></li>
				<li><a class="" href="{{ route('base-de-connaissance.index') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Liste
					</a></li>
			</ul>
		</li>
		<li class="parent "><a data-toggle="collapse" href="#sub-item-partenaire">
				<em class="fa fa-calendar">&nbsp;</em> Partenaires <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
			</a>
			<ul class="children collapse" id="sub-item-partenaire">
				<li><a class="" href="{{ route('partenaire.create') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Ajouter
					</a></li>
				<li><a class="" href="{{ route('partenaire.index') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Liste
					</a></li>
			</ul>
		</li>
		<li><a href="{{ route('utilisateur.index') }}"><em class="fa fa-users">&nbsp;</em> Utilisateurs</a></li>
		<li><a href="login.html"><em class="fa fa-envelope">&nbsp;</em> Contacts</a></li>
		<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Déconnexion</a></li>
	</ul>
</div><!--/.sidebar-->

@yield('content')

<div class="row">
	<div class="col-sm-12">
		<p class="back-link">Aide Numerique <a href="#">Mr Thera & Bossia</a></p>
	</div>
</div>

{{ Html::script('assets/admin/js/jquery-1.11.1.min.js') }}
{{ Html::script('assets/admin/js/bootstrap.min.js') }}
{{ Html::script('assets/admin/js/chart.min.js') }}
{{ Html::script('assets/admin/js/chart-data.js') }}
{{ Html::script('assets/admin/js/easypiechart.js') }}
{{ Html::script('assets/admin/js/easypiechart-data.js') }}
{{ Html::script('assets/admin/js/bootstrap-datepicker.js') }}
{{ Html::script('assets/admin/js/custom.js') }}
<script>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };
</script>
@yield('scripts')
</body>
</html>