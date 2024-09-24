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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId("service_id")->constrained("services")->cascadeOnDelete();
            $table->foreignId("hospital_id")->constrained("hospitals")->cascadeOnDelete();
            $table->string('doctor_cut', 20);
            $table->string('hospital_cut', 20);
            $table->string('total', 25);
            $table->date('date');
            $table->boolean('status')->default(true);
            $table->string('note', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
