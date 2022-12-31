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
        Schema::create('customer_says', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('comment');
            $table->enum('rate', ['0.50', '1.00', '1.50', '2.00', '2.50', '3.00', '3.50', '4.00', '4.50', '5.00'])->nullable();
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
        Schema::dropIfExists('customer_says');
    }
};