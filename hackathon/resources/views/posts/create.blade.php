@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col col-md-6 mx-auto">
      <div class="card" style="width: 30rem;">
        <h5 class="card-header">確認</h5>
        <form enctype="multipart/form-data" action="{{ route('posts.insert') }}" method="post">
          @csrf
          <img src="{{ asset($read_temp_path) }}" class="card-img-top" alt="カードの画像" >
          <input type="hidden" name="image_url" value="{{ asset($read_temp_path) }}">
          <div class="card-body">
            <h5 class="card-title">{{ $title }}</h5>
            <input type="hidden" name="title" value="{{ $title }}">
            <span class="card-text">特徴</span>
            <p class="card-text text-muted">{{ $body }}</p>
            <input type="hidden" name="body" value="{{ $body }}">
            <span class="card-text">URL</span>
            <p class="card-text text-muted">{{ $url }}</p>
            <input type="hidden" name="url" value="{{ $url }}">
            <input type="hidden" name="user_id" value="11">
          </div>
          <div class="form-group text-right">
            <input type="submit" class="btn btn-primary" value="送信">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection