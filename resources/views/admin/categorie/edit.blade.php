@extends('layouts.admin')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Modifier une catégories</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Modifier une catégorie</h1>
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
            <div class="col-lg-10 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Mofifier une catégorie</div>
                    <div style="padding:20px 50px 20px 50px;" class="panel-body">
                        {!! Form::model($categorie, ['route' => ['categorie.update', $categorie->id], 'class'=>'form-horizontal form-label-left', 'method' => 'PUT' ] )  !!}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Libelle</label>
                            <input class="form-control" value="{{ $categorie->libelle }}" name="name" placeholder="Entrez le nom de la catégorie">
                        </div>
                        <div class="form-group">
                            <label>Description </label>
                            <textarea class="form-control" name="description" placeholder="Description">{{ $categorie->description }} </textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Enregistrer">
                            <input type="reset" class="btn btn-danger" value="Annuler">
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
    </div><!--/.main-->

@stop