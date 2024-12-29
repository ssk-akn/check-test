@extends('layouts/add')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-name">
                    <input type="text" name="last_name" value="{{ old('last_name', $contact['last_name'] ?? '') }}" placeholder="例: 山田">
                    <input type="text" name="first_name" value="{{ old('first_name', $contact['first_name'] ?? '') }}" placeholder="例: 太郎">
                </div>
                <div class="form__input--error">
                    <div class="error__last-name">
                        <!-- 姓を入力してください -->
                    </div>
                    <div class="error__first-name">
                        <!-- 名を入力してください -->
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <div class="radio-item">
                        <label>
                            <input type="radio" name="gender" value="1" {{ old('gender', $contact['gender'] ?? '') == 1 ? 'checked' : '' }} checked>
                            <span class="radio-item__label">男性</span>
                        </label>
                    </div>
                    <div class="radio-item">
                        <label>
                            <input type="radio" name="gender" value="2" {{ old('gender', $contact['gender'] ?? '') == 2 ? 'checked' : '' }}>
                            <span class="radio-item__label">女性</span>
                        </label>
                    </div>
                    <div class="radio-item">
                        <label>
                            <input type="radio" name="gender" value="3" {{ old('gender', $content['gender'] ?? '') == 1 ? 'checked' : '' }}>
                            <span class="radio-item__label">その他</span>
                        </label>
                    </div>
                </div>
                <div class="form__input--error">
                    <!-- 性別を選択してください -->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-email">
                    <input type="email" name="email" value="{{ old('email', $contact['email'] ?? '') }}" placeholder="例: test@example.com">
                </div>
                <div class="form__input--error">
                    <!-- メールアドレスを入力してください -->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-tel">
                    <input type="text" name="tel1" value="{{ old('tel1', $contact['tel1'] ?? '') }}" placeholder="080">
                    <span class="hyphen">-</span>
                    <input type="text" name="tel2" value="{{ old('tel2', $contact['tel2'] ?? '') }}" placeholder="1234">
                    <span class="hyphen">-</span>
                    <input type="text" name="tel3" value="{{ old('tel3', $contact['tel3'] ?? '') }}" placeholder="5678">
                </div>
                <div class="form__input--error">
                    <!-- 電話番号を入力してください -->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-address">
                    <input type="text" name="address" value="{{ old('address', $contact['address'] ?? '') }}" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
                </div>
                <div class="form__input--error">
                    <!-- 住所を入力してください -->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-address">
                <input type="text" name="building" value="{{ old('building', $contact['building'] ?? '') }}" placeholder="例: 千駄ヶ谷マンション101">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__select--contact-kinds">
                    <select name="category_id">
                        <option value="">選択してください</option>
                        @foreach($categories as $category)
                        <option value="{{ $category['id'] }}" {{ old('category_id', $contact['category_id'] ?? '') == $category['id'] ? 'selected' : '' }}>
                            {{ $category['content'] }}
                        </option>
                        @endforeach
                    </select>
                    <div class="form__input--error">
                        <!-- お問い合わせの種類を選択してください -->
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-contact">
                    <textarea name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail', $contact['detail'] ?? '') }}</textarea>
                </div>
                <div class="form__input--error">
                        <!-- お問い合わせ内容を入力してください -->
                    </div>
            </div>
        </div>
        <div class="form-button">
            <button class="form-button__submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection