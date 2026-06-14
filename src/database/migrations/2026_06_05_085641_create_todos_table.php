<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   
    public function up()
    {
        // Migration (マイグレーション) : テーブルの作成を担う
        // マイグレーションファイルは、upメソッドに記載されているテーブル情報をもとにテーブルを作成
        Schema::create('todos', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // down : upメソッドの逆の操作としてtodosテーブルを削除する実装がされている。
    public function down()
    {
        {
        Schema::dropIfExists('todos');
        }
    }
}

// マイグレーションを使う理由は2つ
// SQLを知らなくても、PHPコードでテーブル操作ができるため学習コストが不要
// 現在のデータベースの状態を他の開発者に共有することができる