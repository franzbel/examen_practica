<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name',null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Descripcion') !!}
    {!! Form::textarea('description',null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('category', 'Categoria') !!}
    {!! Form::select('category', array('Comedia' => 'Comedia', 'Drama' => 'Drama', 'Terror' => 'Terror')); !!}

</div>