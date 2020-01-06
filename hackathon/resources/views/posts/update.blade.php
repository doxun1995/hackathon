@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col col-md-6 mx-auto">
      <div class="card" style="width: 30rem;">
        <h5 class="card-header">編集確認</h5>
        <form action="{{ route('posts.update_post') }}" method="post">
          @csrf
          <img class="card-img-top" alt="カードの画像" src="/img/sample.jpeg">
          <div class="card-body">
            <h5 class="card-title">{{$post -> title}}</h5>
            <input type="hidden" name="title" value="{{ $post->title }}">
            <span class="card-text">特徴</span>
            <p class="card-text text-muted">{{$post -> body}}</p>
            <input type="hidden" name="body" value="{{ $post->body }}">
            <span class="card-text">URL</span>
            <p class="card-text text-muted">{{$post -> url}}</p>
            <input type="hidden" name="url" value="{{ $post->body }}">
          </div>
          <div class="form-group text-right">
            <button type="submit" class="btn btn-primary">送信</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection