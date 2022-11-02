<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    protected $table ="permohonan";
    protected $primaryKey = "id";
    protected $fillable = [
        'NPWP',
        'NAMA_BADAN_HUKUM',
        'ALAMAT_BADAN_HUKUM',
        'NO_TELP_BADAN_HUKUM',
        'NO_KTP_BADAN_HUKUM',
        'NAMA_PENYERAH',
        'NO_TELP_PENYERAH',
        'NO_PL',
        'TANGGAL_PL',
        'SUBWILAYAH',
        'ALAMAT',
        'LUAS_LOKASI',
        'PERUNTUKAN',
        'KONDISI_LOKASI',
        'BERKAS_SPP',
        'BERKAS_FSU',
        'BERKAS_FEP',
        'flow_id'
    ];
    
        public function flow()
        {
            return $this->belongsTo(Flow::class);
        }
    
}
