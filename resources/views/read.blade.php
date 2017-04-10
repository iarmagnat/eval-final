@extends('layouts.main')

@section('content')
<div class="container" id="read">
    @foreach ($messages as $message)
        <div class="msgHead">
            <span class="author">{{$message->author}}</span>
            <span class="topic">{{$message->topic}}</span>
        </div>

        <div class="content">{!!$message->content!!}</div>
        
        <hr>
    @endforeach
</div>
@endsection
