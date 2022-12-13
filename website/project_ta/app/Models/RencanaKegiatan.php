<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RencanaKegiatan extends Model
{
    protected $table='rencana_kegiatan';
    public function proses()
    {
        return $this->hasMany('App\Models\Proses','rencana_kegiatan_id','id');
    }
    public function tambang()
    {
        return $this->hasMany('App\Models\Tambang','rencana_kegiatan_id','id');
    }
    public function karyawan()
    {
        return $this->hasMany('App\Models\Karyawan','rencana_kegiatan_id','id');
    }
}
