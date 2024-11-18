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
        Schema::table('leads', function (Blueprint $table) {
            //
            $table->string('nama')
                ->after('leads_id');
            $table->string('negara')
                ->after('no_tlp');
            $table->string('kota')
                ->after('negara');
            $table->string('sosmed')
                ->after('alamat');
            $table->enum('status', ['leads, buyer, customer, reseller'])
                ->after('sosmed');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            //
        });
    }
};
