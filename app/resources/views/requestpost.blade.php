@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <nav class="card mt-5 nav-card">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <div class="p-2">
                        <img src="https://via.placeholder.com/70" alt="ユーザー名" class="user-image" style="width: 80px; height: auto;">
                    </div>
                    <div class="ms-3">
                        <p class="card-text　large-text">タイトル</p>
                        <p class="card-text">投稿内容</p>
                    </div>
                </div>
            </div>
            <br>
            <table class="table table-bordered narrow-table">
                <tbody>
                    <tr>
                        <td>内容</td>
                        <td><textarea class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td>電話番号</td>
                        <td><input type="tel"></td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td>
                        <td><input type="email" required></td>
                    </tr>
                    <tr>
                        <td>希望納期</td>
                        <td><input type="date"></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary">確認画面へ</button>
            </div>
        </nav>
    </div>
</div>

@endsection