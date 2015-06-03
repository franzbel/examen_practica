{!! Form::open(array('route' =>'likes.store', 'method'=>'post')) !!}
    {!! Form::hidden('estado_like', false) !!}
    {!! Form::hidden('user_id',  Auth::id()) !!}
    {!! Form::hidden('review_id',  $review->id) !!}
    <button type="submit" class="btn btn-danger btn-sm">Dislike</button>
{!! Form::close() !!}