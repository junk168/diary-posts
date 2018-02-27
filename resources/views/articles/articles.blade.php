@extends('layouts.app')

@section('content')
    <div class="post_box">
        {!! Form::open(['route' => 'articles.store']) !!}
            <div class="form-group">
                タイトル{!! Form::text('title', old('content'), ['class' => 'form-control', 'rows' => '1']) !!}
                本文{!! Form::textarea('body', old('content'), ['class' => 'form-control', 'rows' => '10']) !!}
            </div>
            {!! Form::submit('投稿する', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
    </div>
@endsection
