@extends('app')
@section('estilo')
    <style>
        .setWidth {
            max-width: 100px;
        }
        .concat div { overflow: hidden;
            -ms-text-overflow: ellipsis;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap;
            width: inherit;
            height: 40px;
            padding-right: 25px;;
        }
    </style>
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de peliculas</div>
                <div class="panel-body">
                    <a class="btn btn-info" href="{{ route('movies.create') }}" role="button">Añadir Pelicula</a>
                </div>
                    <table class="table-striped table-hover">
                       <thead>
                        <tr >
                            <th class="col-sm-2">Nombre</th>
                            <th class="col-sm-6">Descripcion</th>
                            <th class="col-sm-1">Categoria</th>
                            <th class="col-sm-1">Mostrar</th>
                            <th class="col-sm-1">Editar</th>
                            <th class="col-sm-1">Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($peliculas as $pelicula)
                            <tr>
                                <td>{{$pelicula->name}}</td>
                                <td class="setWidth concat" ><div>{{$pelicula->description}}</div></td>
                                <td>{{$pelicula->category}}</td>
                                <td><a href="{{route('movies.show', $pelicula->id)}}" class="btn btn-info btn-sm">Mostrar</a></td>
                                <td><a  class="btn btn-warning btn-sm" href="{{route('movies.edit', $pelicula->id)}}">Editar</a></td>
                                <td>@include('movies.partials.eliminar')</td>
                                {{--@include('movies.partials.eliminar')--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $peliculas->render() !!}
            </div>
        </div>
    </div>
</div>

@endsection
