<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';

    public function devisi()
    {
        return $this->belongsTo('App\Models\Devisi','devisi_id');
    }
    public function karyawan()
    {
        return $this->hasMany('App\Models\Karyawan','jabatan_id','id');
    }
}
