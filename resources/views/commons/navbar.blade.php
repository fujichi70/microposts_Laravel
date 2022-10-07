<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">Microposts</a>

        <!--<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">-->
        <!--    <span class="navbar-toggler-icon"></span>-->
        <!--</button>-->

        @if (Auth::check())
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav">
                    {{-- ユーザ一覧ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('users.index', 'Users', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ユーザ詳細ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('users.show', 'My profile', ['user' => Auth::id()], ['class' => 'nav-link']) !!}</li>
                    {{-- ログアウトへのリンク --}}
            </ul>
        </div>
        <div>{!! link_to_route('logout.get', 'Logout', [], ['class' => 'nav-link mr-auto']) !!}</div>
        @else
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav">
                {{-- ユーザ登録ページへのリンク --}}
                <li class="nav-item">{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                {{-- ログインページへのリンク --}}
                <li class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>
            </ul>
        </div>
        @endif
    </nav>
</header>