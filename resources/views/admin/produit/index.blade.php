@extends('layouts.admin')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Catégories</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Catégorie</h1>
			</div>
		</div><!--/.row-->
			
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Nos catégorie</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<td>Libelle</td>
									<td>Description</td>
									<td>Prix</td>
									<td>Image</td>
									<td>Date d'ajout</td>
									<td>Action</td>
								</tr>
							</thead>
							<tbody>
								@foreach($produits as $produit)
								<tr>
									<td>{{ $produit->name }}</td>
									<td>{{ $produit->description }}</td>
									<td>{{ $produit->prix }}</td>
									<td></td>
									<td>{{ date('d/m/Y', strtotime($produit->created_at)) }}</td>
									<td>
										<a href="" class="btn btn-primary"><i class="fa fa-edit"></i></a>
										<a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.main-->
	
@stop