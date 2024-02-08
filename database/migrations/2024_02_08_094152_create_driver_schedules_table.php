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
        Schema::create('driver_schedules', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedInteger('available_seats');
            $table->enum('status', ['booked','pending','done'])->default('pending');
            $table->foreignId('driver_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('route_id')->constrained('routes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_schedules');
    }
};
