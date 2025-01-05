@extends('layouts.add')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin-content">
    <div class="admin-heading">
        <h2>Admin</h2>
    </div>
    <div class="search-form">
        <form class="form" action="/admin/search" method="get">
            @csrf
            <div class="search-text">
                <input type="text" name="keyword" placeholder="名前やメールアドレスを入力してください">
            </div>
            <div class="search-gender">
                <select name="gender" id="">
                    <option value="">性別</option>
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </select>
            </div>
            <div class="search-category">
                <select name="category_id" id="">
                    <option value="">お問い合わせの種類</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->content }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="search-date">
                <input type="date" name="date" id="" value="年/月/日">
            </div>
            <div class="search-button">
                <button class="search-button__submit">
                    検索
                </button>
            </div>
        </form>
        <div class="reset-button">
            <button class="reset-button__submit">
                リセット
            </button>
        </div>
    </div>
    <div class="others-content">
        <div class="export-button">
            エクスポート
        </div>
        <div class="pagination">
            {{ $contacts -> links('vendor.pagination.users') }}
        </div>
    </div>
    <div class="contact-table">
        <table class="contact-table__inner">
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    <span class="contact-table__header-span">お名前</span>
                </th>
                <th class="contact-table__header">
                    <span class="contact-table__header-span">性別</span>
                </th>
                <th class="contact-table__header">
                    <span class="contact-table__header-span">メールアドレス</span>
                </th>
                <th class="contact-table__header">
                    <span class="contact-table__header-span">お問い合わせの種類</span>
                </th>
                <th class="contact-table__header"></th>
            </tr>
            @foreach ($contacts as $contact)
            <tr class="contact-table__row">
                <td class="contact-table__detail">
                    {{ $contact->last_name }} {{ $contact->first_name }}
                </td>
                <td class="contact-table__detail">
                @if ($contact->gender == 1)
                    男性
                @elseif ($contact->gender == 2)
                    女性
                @else
                    その他
                @endif
                </td>
                <td class="contact-table__detail">
                    {{ $contact->email }}
                </td>
                <td class="contact-table__detail">
                    {{ $contact->category->content }}
                </td>
                <td class="contact-table__detail">
                    <div class="detail-button">
                        <button class="detail-button__display">詳細</button>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection