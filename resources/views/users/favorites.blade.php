@extends('layouts.app')

@section('content')
    
        <div class="row">
        <aside class="col-sm-4">
            {{-- ユーザ情報 --}}
            @include('users.card')
        </aside>
        <div class="col-sm-8">
            {{-- タブ --}}
            @include('users.navtabs')
    @foreach ($favorites as $favorite)
        
        <li class="media mb-3">
                    {{-- 投稿の所有者のメールアドレスをもとにGravatarを取得して表示 --}}
                    <img class="mr-2 rounded" src="{{ Gravatar::get($favorite->user->email, ['size' => 50]) }}" alt="">
                    <div class="media-body">
                        <div>
                            {{-- 投稿の所有者のユーザ詳細ページへのリンク --}}
                            {!! link_to_route('users.show', $favorite->user->name, ['user' => $favorite->user->id]) !!}
                            <span class="text-muted">posted at {{ $favorite->user->created_at }}</span>
                        </div>
                        <div>
                            {{-- 投稿内容 --}}
                            <p class="mb-0">{!! nl2br(e($favorite->content)) !!}</p>
                        </div>
                        <div>
                            {{-- お気に入り解除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['favorites.unfavorite', $favorite->id], 'method' => 'delete']) !!}
                                {!! Form::submit('UnFavoite', ['class' => "btn btn-danger btn-sm"]) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </li>
    @endforeach
        </div>
    </div>
@endsection