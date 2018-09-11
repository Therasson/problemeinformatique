@extends('layouts.admin')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Partenaires</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Partenaires</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-10">
				<div class="panel panel-default">
					<div class="panel-heading">Nouveau partenaire</div>
					<div class="panel-body">
						<form role="form" action="{{ route('partenaire.store') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="form-group">
								<label>Libelle <em style="color:red;">*</em></label>
								<input type="text" name="name" class="form-control" placeholder="Entrez le nom du partenaire">
							</div>
							
							<div class="form-group">
								<label>Site web</label>
								<input type="text" name="site_web" class="form-control" placeholder="Entrez le prix">
							</div>
							
							<div class="form-group">
								<label>Logo <em style="color:red;">*</em></label>
								<input type="file" name="image" class="form-control">
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Enregistrer">
								<input type="reset" class="btn btn-danger" value="Annuler">
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.main-->
@stop