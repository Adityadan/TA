<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RencanaKegiatan extends Model
{
    protected $table='rencana_kegiatan';
    public function tambang()
    {
        return $this->belongsTo('App\Tambang','tambang_id');
    }
    public function karyawan()
    {
        return $this->hasMany('App\Karyawan','rencana_kegaitan_id','id');
    }
}
