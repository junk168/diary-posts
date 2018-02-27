<ul class="media-list">
@foreach ($articles as $article)
    <?php $user = $article->user; ?>
    <div class="article_box">
        <li class="media">
            <div class="media-body">
                <div><p>{!! nl2br(e($article->title)) !!}</p></div>
                <div><p>{!! nl2br(e($article->body)) !!}</p></div>
                <div><span class="text-muted">posted by {!! nl2br(e($user->name)) !!}, {{ $article->created_at }}</span></div>
            </div>
            <div class="media-right delete-button">
                @if (Auth::user())
                    @if (Auth::user()->id == $article->user_id)
                        {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    @endif
                @endif
            </div>
        </li>
    </div>
@endforeach
</ul>
{!! $articles->render() !!}
