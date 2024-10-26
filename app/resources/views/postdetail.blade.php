@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <nav class="card mt-5 nav-card">
            <div class="card text-center">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="large-text">タイトル</div>
                    <div class="d-flex align-items-center">
                        <div class="status me-2">ステータス</div>
                        <button type="button" class="btn btn-danger">違反報告</button>
                    </div>
                </div>
                <div class="card-body d-flex align-items-start">
                    <div class="p-2">
                        <img src="https://via.placeholder.com/90" alt="ユーザー名" class="user-image" style="width: 80px; height: auto;">
                    </div>
                    <div class="ms-3">
                        <p class="card-text">金額</p>
                        <p class="card-text">内容詳細</p>
                    </div>
                </div>

            </div>
            <br>
            <div class="d-flex justify-content-evenly">
                <a href="#" class="btn btn-primary">申請する</a>
                <a href="#" class="btn btn-primary">戻る</a>
            </div>

        </nav>
    </div>
</div>

@endsection