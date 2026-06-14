<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    // トレイトとは : クラスにプロパティやメソッドを追加するための機能
    // クラスの継承とは異なり1つのクラスに複数のトレイトを追加することができる
    // トレイト自体はインスタンス化できない
    // SoftDeletesトレイトは、Modelクラスに追加することで削除処理を論理削除に変更するためのトレイト
    // ToDoの削除時にdeleted_atカラムに削除日時を格納して更新
    // ToDoの取得時にdeleted_atカラムがNULLのレコードのみという条件を追加
    use SoftDeletes;

    protected $table = 'todos';

    protected $fillable = [
        'content',
    ];
}
