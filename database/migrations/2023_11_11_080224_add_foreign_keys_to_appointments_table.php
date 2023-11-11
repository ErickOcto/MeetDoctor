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
        Schema::table('appointments', function (Blueprint $table) {
            $table->foreign('doctor_id', 'fk_appointments_to_doctors')->references('id')->on('doctors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id', 'fk_appointments_to_users')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('consultation_id', 'fk_appointments_to_consultations')->references('id')->on('consultations')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropForeign('fk_appointments_to_doctors');
            $table->dropForeign('fk_appointments_to_users');
            $table->dropForeign('fk_appointments_to_consultations');
        });
    }
};
