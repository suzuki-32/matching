@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-offset-3 col-md-6">
            <nav class="card mt-5">
                <div class="card">
                    <div class="card-title text-center large-text">新規登録</div>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="d-flex justify-content-around">
                            <img src="https://via.placeholder.com/60" alt="ユーザー名" class="user-image">
                        </div>
                        <br>
                        <label for="name" class="col-sm-2 col-form-label  no-wrap space">ユーザー名</label><span id="confirmUsername"></span><br>
                        <label for="name" class="col-sm-2 col-form-label  no-wrap space">メールアドレス</label><span id="confirmUsername"></span><br>
                        <label for="name" class="col-sm-2 col-form-label  no-wrap space">パスワード</label><span id="confirmUsername"></span><br>
                        <label for="name" class="col-sm-2 col-form-label  no-wrap space">パスワード(確認)</label><span id="confirmUsername"></span><br>
                        <br>
                        <div class="d-grid gap-2 d-md-block text-center">
                            <button class="btn btn-secondary" onclick="goBack()">戻る</button>
                            <button type="submit" class="btn btn-primary">登録</button>
                        </div>
                    </form>
            </nav>
        </div>
    </div>
</div>
@endsection