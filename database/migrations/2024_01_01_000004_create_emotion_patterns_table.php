<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('emotion_patterns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->text('pattern');
            $table->dateTime('detected_on');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('emotion_patterns');
    }
};
