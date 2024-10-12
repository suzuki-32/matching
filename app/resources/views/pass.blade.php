@extends('layouts.layout')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="card mt-5">
          <div class="card-header">パスワード再設定</div>
          <div class="card-body">
            <form action="{{ route('##') }}" method="POST">
              @csrf
              <div>パスワードの再設定が完了しました</div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">ログイン画面へ</button>
              </div>
            </form>
          </div>
        </nav>
      </div>
    </div>
  </div>
@endsection