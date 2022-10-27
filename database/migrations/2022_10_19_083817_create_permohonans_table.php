<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id();
            $table->string('npwp',100);
            $table->string('nama_hukum',100);
            $table->string('badan_hukum',100);
            $table->string('no_telp',100);
            $table->string('no_ktp',100);
            $table->string('nama_penyerah',100);
            $table->string('no_telp_penyerah',100);
            $table->string('no_pl',100);
            $table->date('tanggal');
            $table->string('subwilayah',100);
            $table->string('alamat',100);
            $table->string('luas_lokasi',100);
            $table->string('peruntukan',100);
            $table->string('kondisi',100);
            $table->string('surat_perubahan_peruntukan',100);
            $table->string('file_scan_uwt',100);
            $table->string('file_endorsement_pl',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permohonan');
    }
}
