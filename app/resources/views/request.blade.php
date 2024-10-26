@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <nav class="card mt-5 nav-card">
            <h5>下記の内容で依頼申請します。</h5>
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
                <button type="button" class="btn btn-primary">申請する</button>
            </div>
        </nav>
    </div>
</div>

@endsection