@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nueva Pelicula</div>

                    <div class="panel-body">
                        @include('movies.partials.errores')
                        {!! Form::open(array('route' => 'movies.store', 'method'=>'post')) !!}
                        @include('movies.partials.form')
                                <button type="submit" class="btn btn-info">Crear</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
