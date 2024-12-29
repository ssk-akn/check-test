@extends('layouts/add')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>Confirm</h2>
    </div>
    <form action="/thanks" class="form" method="post">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <div class="confirm-table__text-name">
                            <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}" readonly>
                            <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}" readonly>
                            <div class="last_name">{{ $contact['last_name'] }}</div>
                            &nbsp;&nbsp;
                            <div class="first_name">{{ $contact['first_name'] }}</div>
                        </div>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender_text" value="{{ $contact['gender_text'] }}" readonly>
                        <input type="hidden" name="gender" value="{{$contact['gender'] }}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="text" name="email" value="{{ $contact['email'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        <input type="text" name="tel" value="{{ $contact['tel'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{ $contact['address'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="{{ $contact['building'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__text">
                        <input type="text" name="content" value="{{ $category['content'] }}" readonly>
                        <input type="hidden" name="category_id" value="{{ $category['id'] }}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                        <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly>
                    </td>
                </tr>
            </table>
        </div>
        <div class="buttons-wrapper">
            <button class="confirm-button__submit" type="submit">送信</button>
        </div>
    </form>
    <form action="/" class="edit-form" method="post">
        @csrf
        @foreach ($contact as $key => $value)
        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
        @endforeach
        <div class="buttons-wrapper">
            <button class="correct-button__submit">修正</button>
        </div>
    </form>
</div>
@endsection