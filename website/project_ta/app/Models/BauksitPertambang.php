<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BauksitPertambang extends Model
{
    protected $table = 'bauksit_pertambang';

    public function bauksit()
    {
        return $this->belongsTo('App\Models\Tambang','tambang_id');
    }
    public function karyawan()
    {
        return $this->belongsTo('App\Models\Bauksit','bauksit_id');
    }
}
