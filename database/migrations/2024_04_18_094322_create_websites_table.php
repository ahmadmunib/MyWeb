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
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('domain');
            $table->string('ip_address');
            $table->string('url');
            $table->string('hosting');
            $table->unsignedBigInteger('cid');
            $table->foreign('cid')->references('id')->on('clients')->onDelete('cascade');
            $table->timestamps();
        });
    }

};
