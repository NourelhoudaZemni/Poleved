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
        Schema::create('balades', function (Blueprint $table) {
            $table->id();
            $table->string("title")-> nullable();
            $table->string("description")-> nullable();
            $table->string("image")-> nullable();
            $table->string("category")-> nullable();
            $table->string("quantity")-> nullable();
            $table->string("price")-> nullable();
            $table->string("discount_price")-> nullable();
            
            $table->string('photo',255)->default('');
            $table->timestamps();
        });
    }
 
 
    public function down()
    {
        Schema::dropIfExists('balades');
    }
};
