<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';

    public function devisi()
    {
        return $this->belongsTo('App\Models\Devisi','devisi_id');
    }
    public function rencana_kegaitan()
    {
        return $this->belongsTo('App\Models\RencanaKegiatan','rencana_kegiatan_id');
    }
    public function jabatan()
    {
        return $this->belongsTo('App\Models\Jabatan','jabatan_id');
    }
    public function alat_berat_karyawan()
    {
        return $this->hasMany('App\Models\AlatBeratKaryawan','karyawan_id','id');
    }
    public function karyawan_pada_proses()
    {
        return $this->hasMany('App\Models\KaryawanPadaProses','karyawan_id','id');
    }
}
