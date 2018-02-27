<header>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Diary posts</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li>
                            <a href="/" class="role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="gravatar">
                                    <img src="{{ Gravatar::src(Auth::user()->email, 20) . '&d=mm' }}" alt="" class="img-circle">
                                </span>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('articles.create') }}">投稿</a>
                        </li>
                        <li>
                            <a href="{{ route('logout.get') }}">ログアウト</a>
                        </li>
                    @else
                        <li><a href="{{ route('signup.get') }}">新規登録</a></li>
                        <li><a href="{{ route('login.get') }}">ログイン</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
