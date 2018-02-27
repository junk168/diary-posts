@extends('layouts.app')

@section('content')
    <div class="top_container">
        <div class="top_content">
            @if (Auth::check())
                <div class="row">
                    <div class="col-ld-6">
                        @if (count($articles) > 0)
                            @include('articles.article_list', ['articles' => $articles])
                        @endif
                    </div>
                </div>
            @else
                <div class="top_title">Diary posts</div>
            @endif
        </div>
    </div>
@endsection
