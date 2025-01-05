@extends('layouts.add')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register-content">
    <div class="register-content__heading">
        <h2>Register</h2>
    </div>
    <div class="register-form">
        <div class="register-form__item">
            <div class="register-form__group">
                <div class="register-form__title">
                    <span class="register-form__title--label">お名前</span>
                </div>
                <div class="register-form__input">
                    <input type="text" name="name" placeholder="例: 山田  太郎">
                </div>
            </div>
            <div class="register-form__group">
                <div class="register-form__title">
                    <span class="register-form__title--label">メールアドレス</span>
                </div>
                <div class="register-form__input">
                    <input type="text" name="name" placeholder="例: test@example.com">
                </div>
            </div>
            <div class="register-form__group">
                <div class="register-form__title">
                    <span class="register-form__title--label">パスワード</span>
                </div>
                <div class="register-form__input">
                    <input type="text" name="name" placeholder="例: coachtech1106">
                </div>
            </div>
        </div>
        <div class="register-form__button">
            <button class="register-form__button-submit">登録</button>
        </div>
    </div>
</div>
@endsection