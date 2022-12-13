<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatBerat extends Model
{
    protected $table = "alat_berat";

    public function alat_berat_pada_tambang()
    {
        return $this->hasMany('App\Models\AlatBeratPadaTambang','alat_berat_id','id');
    }
    public function alat_berat_pada_proses()
    {
        return $this->hasMany('App\Models\AlatBeratPadaProses','alat_berat_id','id');
    }
    public function alat_berat_karyawan()
    {
        return $this->hasMany('App\Models\AlatBeratKaryawan','alat_berat_id','id');
    }
}
