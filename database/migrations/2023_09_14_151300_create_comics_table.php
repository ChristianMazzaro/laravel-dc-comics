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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title',);
            $table->string('description',2000);
            $table->string('thumb',2000);
            $table->float('price',5,2);
            $table->string('sale_date',20)->nullable();
            $table->string('type',20);
            $table->string('artists',255);
            $table->string('writers',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
