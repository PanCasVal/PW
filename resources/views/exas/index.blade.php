@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD EXA </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{url('exas/create')}}" title="Create a empleado"> <i class="fas fa-plus-circle"></i>
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
            <th>codigo</th>
            <th>nombre</th>
            <th>ap_p</th>
            <th>ap_m</th>
            <th>area</th>
            <th>sueldo</th>
            <th>dias</th>
            <th>total_n</th>
            <th>total_b</th>
            <th>Acciones</th>
        </tr>
        @foreach ($exas as $exa)
            <tr>
                <td>{{$exa->id}}</td>
                <td>{{$exa->codigo}}</td>
                <td>{{$exa->nombre}}</td>
                <td>{{$exa->ap_p}}</td>
                <td>{{$exa->ap_m}}</td>
                <td>{{$exa->area}}</td>
                <td>{{$exa->sueldo}}</td>
                <td>{{$exa->dias}}</td>
                <td>{{$exa->total_n}}</td>
                <td>{{$exa->total_b}}</td>
                <td>
                    <form action="{{url('exas', $exa->id)}}" method="POST">   
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger"><i class="fas fa-trash fa-lg"></i></button>
                    </form>
                     <a class="btn btn-warning" href="{{url('exas',$exa->id).'/edit'}}">
                        <i class="fas fa-edit fa-lg"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection