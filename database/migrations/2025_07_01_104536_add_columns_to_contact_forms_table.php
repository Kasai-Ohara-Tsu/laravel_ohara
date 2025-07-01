<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            //
            $table->string('name',20);//氏名
            $table->string('email',255);//メールアドレス
            $table->longText('url')->nullable();//URL null許可
            $table->boolean('gender');//性別
            $table->integer('age')->unsigned();//年齢
            $table->string('contact',200);//お問い合わせ内容
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            //
            $table->dropColumn('name');
            $table->dropColumn('email');
            $table->dropColumn('url');
            $table->dropColumn('gender');
            $table->dropColumn('age');
            $table->dropColumn('contact');
        });
    }
};
