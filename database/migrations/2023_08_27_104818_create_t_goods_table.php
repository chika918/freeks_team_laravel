<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_goods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('goods_name',255); //商品名
            $table->text('img')->nullable(); //画像データ（画像はなくても可、その場合はデフォルト画像を表示。保存はbase64を利用)
            $table->integer('price');
            $table->text('description'); //商品説明
            $table->integer('user_id'); //外部キー
            $table->datetime('created_at')->nullable(); //登録日
            $table->datetime('updated_at')->nullable(); //更新日
            $table->datetime('deleted_at')->nullable(); //削除日（物理削除用）
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_goods');
    }
};
