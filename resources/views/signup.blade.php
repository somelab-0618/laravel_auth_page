@extends('layouts.app')

@section('title', 'ユーザー登録')

@section('content')
    <div class="container__inner">
        <h1 class="page-title">ユーザー登録ページ</h1>
        <form action="{{ url('auth')}}" method="POST" class="auth-form">
            {{ csrf_field() }}
            <div class="auth-form__input">
                <span>UserName: </span><input type="text" name="username" />
            </div>
            @if ($errors->has('username'))
            <span class="error-message">
                {{ $errors->first('username') }}
            </span>
            @endif
            <div class="auth-form__input">
                <span>Email: </span><input type="email" name="email" />
            </div>
            @if ($errors->has('email'))
            <span class="error-message">
                {{ $errors->first('email') }}
            </span>
            @endif
            <div class="auth-form__input">
                <span>Password: </span><input type="password" name="password" />
            </div>
            @if ($errors->has('password'))
            <span class="error-message">
                {{ $errors->first('password') }}
            </span>
            @endif
            <div class="auth-form__input">
                <span>Password<br>(confirm): </span><input type="password" name="password-confirm" />
            </div>
            @if ($errors->has('password-confirm'))
            <span class="error-message">
                {{ $errors->first('password-confirm') }}
            </span>
            @endif
            <div class="auth-form__submit-button-wrap">
                <button class="auth-form__submit-button" type="submit">SignUp</button>
            </div>
        </form>
    </div>
@endsection
