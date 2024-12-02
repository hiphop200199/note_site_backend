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
        Schema::create('note_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('note_id')->index()->constrained()->cascadeOnDelete();
            $table->foreignId('tag_id')->index();
            $table->timestamps();
            $table->boolean('delete_flag');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('note_tags');
    }
};