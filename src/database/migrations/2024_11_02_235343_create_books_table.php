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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->comment('タイトル');
            $table->string('isbn_code', 255)->comment('ISBNコード');
            $table->string('author', 255)->comment('著者');
            $table->string('publishing_company', 255)->comment('出版社');
            $table->date('release_date')->nullable()->comment('発売日');
            $table->integer('price')->nullable()->comment('価格(円)');
            $table->text('memo')->nullable()->comment('メモ');
            $table->softDeletes()->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
