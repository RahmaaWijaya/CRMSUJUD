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
        Schema::create('contact', function (Blueprint $table) {
            $table->id('contact_id');
            $table->string('nama');
            $table->string('email');
            $table->string('no_tlp');
            $table->string('user_id');
            $table->string('negara');
            $table->string('kota');
            $table->string('alamat');
            $table->string('medsos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
