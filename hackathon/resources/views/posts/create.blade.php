@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col col-md-6 mx-auto">
      <div class="card" style="width: 30rem;">
        <h5 class="card-header">確認</h5>
        <form action="{{ route('posts.insert') }}" method="post" enctype="multipart/form-data">
          @csrf
          <img class="card-img-top" alt="カードの画像" src="{{$post['read_temp_path']}">
          <input type="hidden" name="image_url" value="{{$post['read_temp_path']}">
          <div class="card-body">
            <h5 class="card-title">{{ $post['title'] }}</h5>
            <input type="hidden" name="title" value="{{ $post['title'] }}">
            <span class="card-text">特徴</span>
            <p class="card-text text-muted">{{ $post['body']}}</p>
            <input type="hidden" name="body" value="{{ $post['body'] }}">
            <span class="card-text">URL</span>
            <p class="card-text text-muted">{{ $post['url']}}</p>
            <input type="hidden" name="url" value="{{ $post['url'] }}">
          </div>
          <div class="form-group text-right">
            <input type="submit" class="btn btn-primary" value="送信">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection