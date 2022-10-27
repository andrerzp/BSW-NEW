<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    protected $table ="permohonan";
    protected $primaryKey = "id";
    protected $fillable = [
        'npwp', 
        'nama_hukum', 
        'badan_hukum', 
        'no_telp', 
        'no_ktp', 
        'nama_penyerah', 
        'no_telp_penyerah', 
        'no_pl', 
        'tanggal', 
        'subwilayah', 
        'alamat', 
        'luas_lokasi', 
        'peruntukan', 
        'kondisi',
        'surat_perubahan_peruntukan',
        'file_scan_uwt',
        'file_endorsement_pl'
    ];
}
