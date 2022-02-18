@extends('layouts.app')

@section('title', 'ログイン')

@section('content')
    <div class="container__inner">
        <h1 class="page-title">ユーザーページ</h1>
        <div class='dashboard'>
            <div class='dashboard-title'>Dashboard</div>
            <div class='dashboard-username'>ログイン中: {{ $username }}</div>
        </div>
    </div>
@endsection
