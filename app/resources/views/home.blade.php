@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <nav class="card mt-5 nav-card">
            <form action="" method="POST" class="form-inline">
                @csrf
                <div class="d-flex justify-content-evenly">
                    <div class="form-group">
                        <input type="text" name="keyword" class="form-control" placeholder="キーワード">
                    </div>
                    <select name='status' class='form-control'>
                        <option value='' hidden>金額</option>
                        <option value=''>1000</option>
                    </select>
                    <p>円～</p>
                    <select name='status' class='form-control'>
                        <option value='' hidden>金額</option>
                        <option value=''>2000
                        </option>
                    </select>
                    <p>円</p>
                    <div class="form-group">
                        <input type="text" name="sort" class="form-control" placeholder="並び替え">
                    </div>
                    <select name='status' class='form-control'>
                        <option value='' hidden>ステータス</option>
                        <option value=''>掲載中</option>
                        <option value=''>進行中</option>
                        <option value=''>完了</option>
                    </select>

                    <button type="submit" class="btn btn-primary">検索</button>
                </div>
            </form>
            <br>
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td><img src="https://via.placeholder.com/50" alt="ユーザー名" class="user-image"></td>
                        <td>タイトル</td>
                        <td>内容</td>
                        <td>金額</td>
                        <td>ステータス</td>
                    </tr>
                </tbody>
            </table>
            <!-- 無限スクロール、TOPへ戻るボタン実装予定 -->
        </nav>
    </div>
</div>
@endsection