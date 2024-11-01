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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('seller_id')->unique(); // Foreign key and unique for one to one
            $table->unsignedBigInteger('seller_id'); // Foreign key (not unique for one-to-many)
            $table->string('bio')->nullable(); // Example profile field
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
