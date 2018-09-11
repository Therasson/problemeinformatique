@extends('layouts.admin')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Utilisateurs</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Utilisateurs</h1>
			</div>
		</div><!--/.row-->
			
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Nos utilisateurs</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<td>Nom & prenoms</td>
									<td>Username</td>
									<td>Email</td>
									<td>Date de création</td>
									<td>Action</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>
										<a href="" class="btn btn-primary"><i class="fa fa-edit"></i></a>
										<a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.main-->
	
@stop