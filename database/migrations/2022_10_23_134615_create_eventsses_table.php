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
        Schema::create('eventss', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->Date("date");
            $table->string("details");
            $table->string("address");
            $table->string("mobile");
            $table->string("sponsor");
            $table->string("participants");
            $table->string("places");
            $table->string('image');
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
        Schema::dropIfExists('eventsses');
    }
};
