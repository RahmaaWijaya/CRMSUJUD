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
        Schema::table('contact', function (Blueprint $table) {
            //tambaah field baru
            $table->unsignedBigInteger('leads_id')->after('contact_id');
            $table->string('nama_perusahaan')->after('nama');
            $table->string('aktifitas')->after('no_tlp');
            $table->timestamp('waktu_chat')->after('alamat')->useCurrent();
            $table->string('medsos')->nullable()->change();

            //hapus field
            $table->dropColumn('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact', function (Blueprint $table) {
            //
        });
    }
};
