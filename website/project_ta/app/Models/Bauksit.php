<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bauksit extends Model
{
    protected $table = "bauksit";

    public function proses_produksi_bauksit()
    {
        return $this->hasMany('App\Models\ProsesProduksiBauksit','bauksit_id','id');
    }
    public function bauksit_pertambang()
    {
        return $this->hasMany('App\Models\BauksitPertambang','bauksit_id','id');
    }

}
