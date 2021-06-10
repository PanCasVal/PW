@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar  lookups con el id {{$lookup->id}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{url('lookups')}}" title="Regresar"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{url('lookups', $lookup->id)}}" method="POST" >
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{$lookup->name}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Code:</strong>
                    <input type="text" name="code" class="form-control" placeholder="Code" value="{{$lookup->code}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipo:</strong>
                    <input type="text" name="type" class="form-control" placeholder="Tipo" value="{{$lookup->type}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pocicion:</strong>
                    <input type="text" name="position" class="form-control" placeholder="Pocicion" value="{{$lookup->position}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>

@endsection