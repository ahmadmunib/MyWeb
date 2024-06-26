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
        Schema::create('widget_data', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('value');
            $table->string('type');
            $table->unsignedBigInteger('widget_id');
            $table->foreign('widget_id')->references('id')->on('widgets')->onDelete('cascade');
            $table->integer('sort');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('widget_data');
    }
};
