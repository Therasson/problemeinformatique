@extends('layouts.admin')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Produit</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Produit</h1>
			</div>
		</div><!--/.row-->
			
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Nouveau produit</div>
					<div class="panel-body">
						<form role="form">
							<div class="form-group">
								<label>Libelle</label>
								<input type="text" class="form-control" placeholder="Entrez le nom du produit">
							</div>
							<div class="form-group">
								<label>Catégorie</label>
								<select class="form-control">
									<option>Sélectionnez la catégorie</option>
								</select>
							</div>
							<div class="form-group">
								<label>Prix</label>
								<input type="text" class="form-control" placeholder="Entrez le prix">
							</div>
							<div class="form-group">
								<label>Description </label>
								<textarea class="form-control" rows="6" placeholder="Description"></textarea>
							</div>
							<div class="form-group">
								<label>Image</label>
								<input type="file" class="form-control" placeholder="Entrez le nom du produit">
							</div>
							<div class="form-group">
								<label></label>
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