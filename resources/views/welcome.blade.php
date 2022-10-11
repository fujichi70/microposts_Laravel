@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-4">
                {{-- ユーザ情報 --}}
                @include('users.card')
            </aside>
            <div class="col-sm-8">
                {{-- 投稿フォーム --}}
                @include('microposts.form')
                {{-- 投稿一覧 --}}
                @include('microposts.microposts')
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1 class="mb-4">Welcome to the Microposts</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary mx-4 col-4']) !!}
                {{-- ログインページへのリンク --}}
                {!! link_to_route('login', 'Login', [], ['class' => 'btn btn-lg btn-primary mx-4 col-4']) !!}
            </div>
        </div>
    @endif
@endsection