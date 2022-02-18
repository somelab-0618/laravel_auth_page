@extends('layouts.app')

@section('title', 'ユーザー登録')

@section('content')
    <div class="container__inner">
        <h1 class="page-title">ユーザー登録ページ</h1>
        <form action="#" class="auth-form">
            <div class="auth-form__input">
                <span>UserName: </span><input type="text" />
            </div>
            <div class="auth-form__input">
                <span>Email: </span><input type="email" />
            </div>
            <div class="auth-form__input">
                <span>Password: </span><input type="password" />
            </div>
            <div class="auth-form__submit-button-wrap">
                <button class="auth-form__submit-button" type="submit">SignUp</button>
            </div>
        </form>
    </div>
@endsection
