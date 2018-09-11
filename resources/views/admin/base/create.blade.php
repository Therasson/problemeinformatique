@extends('layouts.admin')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">Base de connaissance</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Base de connaissance</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-10">
				<div class="panel panel-default">
					<div class="panel-heading">Ajouter</div>
					<div class="panel-body">
						<form role="form" action="{{ route('base-de-connaissance.store') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="form-group">
								<label>Type <em style="color:red;">*</em></label>
								<select id="type" name="type" class="form-control">
									<option value=""> Selectionnez un type </option>
									<option value="texte"> Texte </option>
									<option value="video"> Vidéo </option>
								</select>
							</div>

							<div class="form-group">
								<label>Titre </label>
								<input type="text" name="name" class="form-control" placeholder="Entrez le titre ici">
							</div>

							<div id="video" class="form-group">
								<label>Url de la video </label>
								<input type="text" name="name" class="form-control" placeholder="Entrez le lien YouTube de la video">
							</div>

							<div id="texte" class="form-group">
								<label>Télecharger le fichier ici </label>
								<input type="file" name="file" class="form-control">
							</div>

							<div class="form-group">
								<label>Description <em style="color:red;">*</em></label>
								<textarea name="description" class="form-control"></textarea>
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

@section('scripts')
	<script>
        $(function() {

            $('#texte').hide();
            $('#video').hide();

            $('#type').change(function(){
                if($('#type').val() == ' ') {
                    $('#texte').hide();
                    $('#video').hide();
                }
                if($('#type').val() == 'texte') {
                    $('#texte').toggle("slow");
                    $('#video').hide();
                } else {
                    $('#texte').hide();
                    $('#video').toggle("slow");
                }
            });
        });
	</script>
@stop