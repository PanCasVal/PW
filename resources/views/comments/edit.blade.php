@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modificar lookups {{$comment->id}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{url('comments')}}" title="Regresar"> <i class="fas fa-backward "></i> </a>
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
    <form action="{{url('comments',$comment->id)}}" method="POST" >
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contenido:</strong>
                    <input type="text" name="content" class="form-control" placeholder="Contenido" value="{{$comment->content}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Estado:</strong>
                    <input type="text" name="state" class="form-control" placeholder="Estado" value="{{$comment->state}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Autor:</strong>
                    <input type="text" name="author" class="form-control" placeholder="Autor"value="{{$comment->author}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pocicion:</strong>
                    <input type="Email" name="email" class="form-control" placeholder="Email" value="{{$comment->email}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pocicion:</strong>
                    <input type="ID Post" name="id_post" class="form-control" placeholder="ID Post" value="{{$comment->id_post}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>

@endsection