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
        Schema::table('deals', function (Blueprint $table) {
            //
            $table->renameColumn('name', 'nama');
            $table->renameColumn('amount', 'jumlah');
            $table->bigInteger('contacts_id')->nullable()->change();
            $table->dropColumn('user_id');
            $table->dropColumn('tanggal');
            $table->datetime('waktu');
            $table->string('status')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('deals', function (Blueprint $table) {
            //
        });
    }
};
