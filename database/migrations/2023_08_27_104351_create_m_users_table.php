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
        Schema::create('m_users', function (Blueprint $table) {
            $table->increments('id'); //外部キー参照先;
            $table->string('name',255);
            $table->string('password',20)->unique();
            $table->datetime('created_at')->nullable(); //登録日
            $table->datetime('updated_at')->nullable(); //更新日
            $table->datetime('deleted_at')->nullable(); //削除日（論理削除用）
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_users');
    }
};
