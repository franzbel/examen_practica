@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Pelicula</div>

                    <div class="panel-body">
                        @include('movies.partials.errores')
                        {!! Form::model($pelicula,['route' => ['movies.update',$pelicula], 'method'=>'put']) !!}
                        @include('movies.partials.form')
                        <button type="submit" class="btn btn-info">Editar</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
