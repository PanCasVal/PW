@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD LOOKUP</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{url('lookups/create')}}" title="Create a Lookup"> <i class="fas fa-plus-circle"></i>
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
            <th>name</th>
            <th>code</th>
            <th>type</th>
            <th>position</th>
        </tr>
        @foreach ($lookups as $lookup)
            <tr>
                <td>{{$lookup->id}}</td>
                <td>{{$lookup->name}}</td>
                <td>{{$lookup->code }}</td>
                <td>{{$lookup->type}}</td>
                <td>{{$lookup->position}}</td>
            </tr>
        @endforeach
    </table>

@endsection