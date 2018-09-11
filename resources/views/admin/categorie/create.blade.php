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
				@if (session('success'))
					<div class="alert alert-success alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						{{ session('success') }}
					</div>
				@endif

				@if (session('error'))
					<div class="alert alert-danger alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						{{ session('error') }}
					</div>
				@endif
			</div>
			<div class="col-lg-5">
				<div class="panel panel-default">
					<div class="panel-heading">Nouvelle catégorie</div>
					<div class="panel-body">
						<form role="form" action="{{ route('categorie.store') }}" method="post">
							{{ csrf_field() }}
							<div class="form-group">
								<label>Libelle</label>
								<input class="form-control" value="{{ old('name') }}" name="name" placeholder="Entrez le nom de la catégorie">
							</div>
							<div class="form-group">
								<label>Description </label>
								<textarea class="form-control" name="description" placeholder="Description">{{ old('description') }} </textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Enregistrer">
								<input type="reset" class="btn btn-danger" value="Annuler">
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->


			<div class="col-lg-7">
				<div class="panel panel-default">
					<div class="panel-heading">Nos dernières catégories <a href="{{ route('categorie.index') }}" class="btn btn-danger pull-right btn-sm"> Toutes les catégories</a></div>
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
							<tr>
								<td>Libelle</td>
								<td>Description</td>
								<td>Slug</td>
							</tr>
							</thead>
							<tbody>
							@foreach($categories as $categorie)
								<tr>
									<td>{{ $categorie->libelle }}</td>
									<td>{{ $categorie->description }}</td>
									<td>{{ $categorie->slug }}</td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
	</div><!--/.main-->

@stop