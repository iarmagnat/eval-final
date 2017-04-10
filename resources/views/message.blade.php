@extends('layouts.main')

@section('content')
<div class="container" id="message">
    {!! Form::open(['url' => '/message', 'method' => 'post']) !!}

        <div id="topBloc">
            
            {{ Form::label('author', 'Your name') }}

            {{ Form::label('topic', 'Topic') }}

            {{ Form::text('author') }}

            {{ Form::text('topic') }}
            
        </div>

        {{ Form::label('content', 'Message') }}
        {{ Form::textarea('content') }}

        {{ Form::submit('Send!') }}

    {!! Form::close() !!}
    
    <div id="wysiwyg">
        <div class="msgHead">
            <span class="author"></span>
            <span class="topic"></span>
        </div>

        <div class="content"></div>
    </div>
</div>
@endsection
