@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col col-md-6 mx-auto">
    <div class="card">
      <h5 class="card-header">編集する</h5>
      <div class="card-body">
        <div class="form-group">
          <label for="title" class="text-muted">アプリ名</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="URL" class="text-muted">URL</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="char" class="text-muted">特徴</label>
          <textarea type="text" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="file">
          </div>
        <div class="text-right">
          <button type="submit" class="btn btn-primary">送信</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection