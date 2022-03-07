<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     // title と body と image_path を追記
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); // 名前(name)を保存するカラム
            $table->string('gender');  // 性別(gender)の本文を保存するカラム
            $table->string('hobby'); // 趣味(hobby)を保存するカラム
            $table->string('introduction');  // 自己紹介(introduction)の本文を保存するカラム
            $table->timestamps();
            //カラムとValidation、bladeファイルのname属性を一緒にする
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
