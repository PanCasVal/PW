@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD TAG</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{url('tags/create')}}" title="Create a Tag"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>frequency</th>
            <th>Acciones</th>
        </tr>
        @foreach ($tags as $tag)
            <tr>
                <td>{{$tag->id}}</td>
                <td>{{$tag->name}}</td>
                <td>{{$tag->frequency}}</td>
                <td>
                    <form action="{{url('tags', $tag->id)}}" method="POST">   
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger"><i class="fas fa-trash fa-lg"></i></button>
                    </form>
                    <a class="btn btn-warning" href="{{url('tags', $tag->id).'/edit'}}">
                        <i class="fas fa-edit fa-lg"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection