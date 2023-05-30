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
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->id('sender');
            $table->id('reciever');
            $table ->string('description');
            $table ->string('location');
            $table ->string('from_address');
            $table ->string('to_address');
            $table->timestamps();

            $table -> foreign('sender')->references('id')->on('users');
            $table -> foreign('reciever')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcels');
    }
};
