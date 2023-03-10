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
        Schema::create('storages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->boolean('status')->default(true);
            $table->string('opening_time')->nullable();
            $table->string('closing_time')->nullable();
            $table->text('description');
            $table->text('address');
            $table->string('country');
            $table->string('city');
            $table->string('district')->nullable();
            $table->string('maps')->nullable();
            $table->bigInteger('longitude')->nullable();
            $table->bigInteger('latitude')->nullable();
            $table->foreignId('team_id')->constrained();
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
        Schema::dropIfExists('storages');
    }
};
