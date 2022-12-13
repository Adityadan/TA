<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambang extends Model
{
    protected $table = "tambang";
    public function rencana_kegiatan()
    {
        return $this->belongsTo('App\Models\RencanaKegiatan','rencana_kegiatan_id');
    }

    public function bauksit_pertambang()
    {
        return $this->hasMany('App\Models\BauksitPertambang','tambang_id','id');
    }
    public function alat_berat_pada_tambang()
    {
        return $this->hasMany('App\Models\AlatBeratPadaTambang','tambang_id','id');
    }
    public function proses()
    {
        return $this->hasMany('App\Models\Proses','tambang_id','id');
    }
}
