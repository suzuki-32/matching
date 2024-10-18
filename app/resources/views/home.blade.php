@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <nav class="card mt-5 nav-card">
            <form action="" method="POST" class="form-inline">
                @csrf
                <div class="d-flex justify-content-around">
                    <div class="form-group">
                        <input type="text" name="keyword" class="form-control" placeholder="キーワード">
                    </div>
                   
                    <div class="form-group">
                        <input type="text" name="sort" class="form-control" placeholder="並び替え">
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">検索</button>
            </form>

            <br>
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td><img src="https://via.placeholder.com/50" alt="ユーザー名" class="user-image"></td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>
            <!-- 無限スクロール、TOPへ戻るボタン実装予定 -->
        </nav>
    </div>
</div>
@endsection