@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col col-md-6 mx-auto">
      <div class="card" style="width: 30rem;">
        <h5 class="card-header">確認</h5>
        <form action="{{ route('posts.insert') }}" method="post">
          @csrf
          <img class="card-img-top" alt="カードの画像" src="/img/sample.jpeg">
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <span class="card-text">特徴</span>
            <p class="card-text text-muted">{{ $post->body}}</p>
            <span class="card-text">URL</span>
            <p class="card-text text-muted">{{ $post->url}}</p>
          </div>
          <div class="form-group text-right">
            <input type="submit" class="btn btn-primary" value="送信">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection