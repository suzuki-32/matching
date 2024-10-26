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
          <form action="{{ route('login')}}" method="GET">
            @csrf
            <div class="card-title text-center">新規登録が完了しました</div>
            <br>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">ログイン画面へ</button>
            </div>
          </form>
      </nav>
    </div>
  </div>
</div>
@endsection