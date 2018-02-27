@extends('layouts.app')

@section('content')
    <div class="top_container">
        <div class="top_content">
            @if (Auth::check())

            @else
                <div class="top_title">Articles</div>
            @endif
        </div>
    </div>
@endsection
