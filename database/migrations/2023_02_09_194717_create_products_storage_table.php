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
        Schema::create('products_storage', function (Blueprint $table) {
            $table->id();
            $table->foreignId('storage_id')->nullable()->constrained();
            $table->foreignId('products_id')->nullable()->constrained();
            $table->enum('priority', ['none', 'low', 'medium', 'high', 'very_high'])->default('none');
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
        Schema::dropIfExists('priority_product_storage');
    }
};
