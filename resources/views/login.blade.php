@extends('layouts.app')

@section('title', 'ログイン')

@section('content')
    <div class="container__inner">
        <h1 class="page-title">ログインページ</h1>
        <form action="#" class="auth-form">
            <div class="auth-form__input">
                <span>Email: </span><input type="email" />
            </div>
            <div class="auth-form__input">
                <span>Password: </span><input type="password" />
            </div>
            <button class="auth-form__submit-button" type="submit">Login</button>
        </form>
    </div>
@endsection
