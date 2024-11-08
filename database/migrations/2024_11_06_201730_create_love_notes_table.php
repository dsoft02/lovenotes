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
        Schema::create('love_notes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default('Anonymous');
            $table->enum('gender', ['Male', 'Female', 'None'])->nullable()->default('None');
            $table->integer('age')->nullable();
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('love_notes');
    }
};
