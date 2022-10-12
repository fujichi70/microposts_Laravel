{!! Form::open(['route' => 'microposts.store', 'class' => "mb-4"]) !!}
    <div class="form-group">
        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
    </div>
{!! Form::close() !!}