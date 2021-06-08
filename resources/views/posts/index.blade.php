@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD POST </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{url("posts/create")}}" title="Create a POST"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Etiquetas</th>
            <th>Estatus</th>
            <th>Usuario</th>

        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->tags}}</td>
                <td>{{$post->state}}</td>
                <td>{{$post->user_id}}</td>
            </tr>
        @endforeach
    </table>

@endsection