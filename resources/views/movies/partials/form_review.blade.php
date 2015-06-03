{!! Form::open(array('route' =>'reviews.store', 'method'=>'post')) !!}
    <div class="form-group">
        {!! Form::hidden('movie_id', $pelicula->id) !!}
        {!! Form::hidden('user_id', Auth::id()) !!}
        {!! Form::label('content', 'Contenido') !!}
        {!! Form::textarea('content',null, ['class'=>'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-danger btn-sm">Guardar</button>
{!! Form::close() !!}
