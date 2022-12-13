<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proses extends Model
{
    protected $table = "proses";
    public function tambang()
    {
        return $this->belongsTo('App\Models\Tambang','tambang_uid');
    }
    public function rencana_kegiatan()
    {
        return $this->belongsTo('App\Models\RencanaKegiatan','rencana_kegiatan_id');
    }

    public function proses_produksi_bauksit()
    {
        return $this->hasMany('App\Models\ProsesProduksiBauksit','proses_id','id');
    }
    public function karyawan_pada_proses()
    {
        return $this->hasMany('App\M odels\KaryawanPadaProses','proses_id','id');
    }
    public function alat_berat_pada_proses()
    {
        return $this->hasMany('App\Models\AlatBeratPadaProses','proses_id','id');
    }
}
