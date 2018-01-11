<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = "InnoDB";

            $table->increments('id')->index('id');
            $table->integer('tag_id')->unsigned()->index();
            $table->string('title')->min(6);
            $table->text('description')->max(4000)->nullable();
            $table->string('image');
            $table->integer('stock');

            $table->foreign('tag_id')
                  ->references('id')
                  ->onUpdate('cascade')
                  ->onDelete('cascade')
                  ->on('tags');

            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
