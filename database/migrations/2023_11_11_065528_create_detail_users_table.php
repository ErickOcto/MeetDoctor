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
        Schema::create('detail_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index('fk_detail_users_to_users');
            $table->foreignId('type_user_id')->nullable()->index('fk_detail_users_to_type_users');
            $table->text('address')->nullable();
            $table->string('contact')->nullable();
            $table->enum('gender', (['pria', 'wanita']))->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_users');
    }
};
