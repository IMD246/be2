<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->bigIncrements('idProduct');
            $table->string('NameProduct');
            $table->float('Price')->nullable();
            $table->string('Image')->nullable();
            $table->float('Rate');
            $table->double('Amount')->nullable();
            $table->integer('View')->nullable();
            $table->text('Describe')->nullable();
            $table->float('discount');
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();
            $table->foreignID('idCategory');
            $table->foreignID('idAuthor');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Product');
    }
}
