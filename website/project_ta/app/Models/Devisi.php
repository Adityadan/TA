<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devisi extends Model
{
    protected $table = 'devisi';

    public function jabatan()
    {
        return $this->hasMany('App\Models\Jabatan','devisi_id','id');
    }
    public function karyawan()
    {
        return $this->hasMany('App\Models\Karyawan','devisi_id','id');
    }
}
