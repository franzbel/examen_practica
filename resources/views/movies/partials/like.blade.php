{!! Form::open(array('route' =>'likes.store', 'method'=>'post')) !!}
    {!! Form::hidden('estado_like', true) !!}
    {!! Form::hidden('user_id',  Auth::id()) !!}
    {!! Form::hidden('review_id',  $review->id) !!}
    <button type="submit" class="btn btn-danger btn-sm">Like</button>
{!! Form::close() !!}