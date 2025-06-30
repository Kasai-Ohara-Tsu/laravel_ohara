<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//Migrationクラスを継承した新しいクラスを作成し、リターン
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //upメソッド。DBへの変更を記述
    public function up(): void
    {
        //エロクアント。schema::create('テーブル名','カラム')でテーブルを作成
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('text');//追記
            $table->timestamps();//created_at(作成日時)とupdate_at(更新日時)を自動生成
        });
    }

    /**
     * Reverse the migrations.
     */
    //downメソッド。ロールバック用の処理を記述
    public function down(): void
    {
        //testsテーブルが存在したら削除する
        Schema::dropIfExists('tests');
    }
};
