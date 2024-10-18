@extends('layouts.layout')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col col-md-offset-3 col-md-6">
      <nav class="card mt-5">
        <div class="card">
          <div class="card-title text-center large-text">パスワード再設定</div>
        </div>
        <div class="card-body">
          <form action="" method="POST">
            @csrf
            <div class="d-flex justify-content-around">
              <label for="password" class="col-sm-2 col-form-label  no-wrap space">新しいパスワード<span class="text-danger">*</span></label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" required/>
              </div>
            </div>
            <br>
            <div class="d-flex justify-content-around">
              <label for="password2" class="col-sm-2 col-form-label  no-wrap space">新しいパスワード(確認)<span class="text-danger">*</span></label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" required/>
              </div>
            </div>
            <br>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">登録</button>
            </div>
          </form>
      </nav>
    </div>
  </div>
</div>
@endsection