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
            <h7>以下の内容で違反報告します。</h7>
            <textarea class="form-control"></textarea>
            <br>
            <div class="d-flex justify-content-evenly">
                <a href="#" class="btn btn-primary">報告する</a>
            </div>

        </nav>
    </div>
</div>

@endsection