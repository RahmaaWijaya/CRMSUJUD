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
        Schema::create('calls_', function (Blueprint $table) {
            $table->id('calls_id');
            $table->string('subject');
            $table->date('tanggal');
            $table->string('user_id');
            $table->string('contact_id');
            $table->string('deal_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calls_');
    }
};
