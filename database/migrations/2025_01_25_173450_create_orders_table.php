<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->string('color');

            $table->string('unit');

            $table->string('contact');

            $table->string('phone')->nullable();

            $table->string('status');

            $table->string('img_url',100)->nullable();

            $table->integer('envio_type')->nullable();

            $table->float('total');

            $table->string('currency',10);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
