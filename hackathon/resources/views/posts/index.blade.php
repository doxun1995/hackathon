@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col col-md-6 mx-auto">
      @foreach($posts as $post)
        <div class="card" style="width: 30rem;">
          <img class="card-img-top" alt="カードの画像" src="{{$post -> image_url}}">
          <div class="card-body">
            <h5 class="card-title">{{$post -> title}}</h5>
            <span class="card-text">特徴</span>
            <p class="card-text text-muted">{{$post -> body}}</p>
            <span class="card-text">URL</span>
            <p class="card-text text-muted">{{$post -> url}}</p>
            <span class="card-text">作者</span>
          <p class="card-text text-muted">{{ $post->user->name }}</p>
            <span class="card-text">投稿日</span>
            <p class="card-text text-muted">{{$post -> created_at}}</p>
            <span class="card-text">更新日</span>
            <p class="card-text text-muted">{{$post -> updated_at}}</p>
            <a href="{{ action('PostController@edit', $post->id) }}" class="card-link">編集</a>
            <a href="{{ action('PostController@delete',$post->id) }}" class="card-link">削除</a>
          </div>
        </div>
      @endforeach
      <div class="d-flex justify-content-center">
        {{ $posts->links() }}
      </div>
    </div>
  </div>
@endsection