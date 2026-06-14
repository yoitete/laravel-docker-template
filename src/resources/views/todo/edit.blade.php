@extends('layouts.base')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">ToDo編集</div>
      <div class="card-body">
      <!-- action属性で指定したルートにリクエストが送信 -->
      <form method="POST" action="{{ route('todo.update', $todo->id) }}"> 
          @csrf
          <!-- @method('PUT')を使用してPUTメソッドでリクエスト -->
          @method('PUT')
          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">ToDo入力</label>
            <div class="col-md-6">
            <input type="text" class="form-control @if($errors->has('content')) border-danger @endif" name="content" value="{{ $todo->content }}">
            <!-- $errors->has('入力欄のname属性')の条件式でバリデーションがあるか判断-->
            <!-- if文「もし〜なら、この処理を実行する」 -->
            <!-- $errorsはMessageBagクラスのインスタンスが代入されており、発生したバリデーションエラーの情報を持っている -->
            @if($errors->has('content'))
            <!-- 必須項目などのあらかじめ設定していることで、その項目に記入がないとエラー文が表示されるようになる処理 -->
            <!-- エラーメッセージを出力 -->
            <span class="text-danger">{{ $errors->first('content') }}</span>
            @endif
            
            </div>
          </div>
          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">更新</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection