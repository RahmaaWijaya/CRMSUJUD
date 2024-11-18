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
        Schema::table('calls_', function (Blueprint $table) {
            //
            $table->dropColumn('subject');
            $table->dropColumn('user_id');
            $table->dropColumn('deal_id');
            $table->unsignedBigInteger('contact_id')->after('calls_id')->change();
            $table->string('nama')->after('contact_id');
            $table->string('nama_perusahaan')->after('nama');
            $table->string('email')->after('nama_perusahaan');
            $table->string('no_tlp')->after('email');
            $table->string('aktifitas')->default('')->after('no_tlp');
            $table->string('status')-> nullable()->after('aktifitas');
            $table->string('negara')->after('status');
            $table->string('kota')->after('negara');
            $table->string('alamat')->after('kota');
            $table->timestamp('tanggal')->useCurrent()->change();
            $table->string('medsos')->after('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('calls_', function (Blueprint $table) {
            //
        });
    }
};
