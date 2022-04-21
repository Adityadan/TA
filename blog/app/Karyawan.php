<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';

    public function tambang()
    {
        return $this->belongsTo('App\Tambang','tambang_id');
    }
    public function rencana_kegiatan()
    {
        return $this->belongsTo('App\RencanaKegiatan','tambang_id');
    }
}
