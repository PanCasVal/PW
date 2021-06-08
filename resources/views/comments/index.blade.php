@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD COMMENT</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{url('comments/create')}}" title="Create a comment"> <i class="fas fa-plus-circle"></i>
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
            <th>content</th>
            <th>state</th>
            <th>author</th>
            <th>email</th>
            <th>url</th>
            <th>id_post</th>
        </tr>
        @foreach ($comments as $comment)
            <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->content}}</td>
                <td>{{$comment->state}}</td>
                <td>{{$comment->author}}</td>
                <td>{{$comment->email}}</td>
                <td>{{$comment->url}}</td>
                <td>{{$comment->id_post}}</td>
            </tr>
        @endforeach
    </table>

@endsection