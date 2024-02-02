<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_pengaduan', function (Blueprint $table) {
            $table->string('datepicker');
            $table->string('lokasi');
            $table->string('judullaporan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_pengaduan', function (Blueprint $table) {
            //
        });
    }
};
