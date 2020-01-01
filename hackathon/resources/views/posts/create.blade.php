@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col col-md-6 mx-auto">
      <div class="card" style="width: 30rem;">
        <h5 class="card-header">確認</h5>
        <form action="">
          <img class="card-img-top" alt="カードの画像" src="/img/sample.jpeg">
          <div class="card-body">
            <h5 class="card-title">タイトル</h5>
            <span class="card-text">特徴</span>
            <p class="card-text text-muted">このアプリの特徴は....</p>
            <span class="card-text">URL</span>
            <p class="card-text text-muted">https://</p>
          </div>
        </form>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">送信</button>
      </div>
    </div>
  </div>
@endsection