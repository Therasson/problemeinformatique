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
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Nos catégorie</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
							<tr>
								<td>Libelle</td>
								<td>Description</td>
								<td>Slug</td>
								<td>Date de création</td>
								<td>Action</td>
							</tr>
							</thead>
							<tbody>
							@foreach($categories as $categorie)
								<tr>
									<td>{{ $categorie->libelle }}</td>
									<td>{{ $categorie->description }}</td>
									<td>{{ $categorie->slug }}</td>
									<td>{{ date('d/m/Y', strtotime($categorie->created_at)) }}</td>
									<td>
										<a href="{{ route('categorie.edit', $categorie->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
										{!! Form::open(['method' => 'DELETE','route' => ['categorie.destroy', $categorie->id]]) !!}
										{{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm','onclick' => 'return confirm(\'Vraiment supprimer cette annonce ?\') '])  }}
										{!! Form::close() !!}
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