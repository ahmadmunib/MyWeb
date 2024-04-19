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
        Schema::create('hosting_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('w_id');
            $table->foreign('w_id')->references('id')->on('websites')->onDelete('cascade');
            $table->string('host_type');
            $table->timestamps();
            $table->softDeletes();
        });
    }

};
