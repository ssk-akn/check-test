@extends('layouts.add')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login-content">
    <div class="login-content__heading">
        <h2>Login</h2>
    </div>
    <div class="login-form">
        <div class="login-form__item">
            <div class="login-form__group">
                <div class="login-form__title">
                    <span class="login-form__title--label">メールアドレス</span>
                </div>
                <div class="login-form__input">
                    <input type="text" name="name" placeholder="例: test@example.com">
                </div>
            </div>
            <div class="login-form__group">
                <div class="login-form__title">
                    <span class="login-form__title--label">パスワード</span>
                </div>
                <div class="login-form__input">
                    <input type="text" name="name" placeholder="例: coachtech1106">
                </div>
            </div>
        </div>
        <div class="login-form__button">
            <button class="login-form__button-submit">ログイン</button>
        </div>
    </div>
</div>
@endsection