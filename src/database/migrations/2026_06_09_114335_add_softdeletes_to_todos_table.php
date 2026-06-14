<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoftdeletesToTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // デフォルトは物理削除
    // Migration (マイグレーション) : テーブルの作成を担う
    // マイグレーションファイルを作成しupメソッド内で$table->softDeletes();を実行し、
    // php artisan(アーティザン) migrateコマンドでテーブルにdeleted_atカラムが追加される
    public function up()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // down : upメソッドの逆の操作としてdeleted_atカラムを削除する実装がされている。
    public function down()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}

// マイグレーションを使う理由は2つ
// SQLを知らなくても、PHPコードでテーブル操作ができるため学習コストが不要
// 現在のデータベースの状態を他の開発者に共有することができる