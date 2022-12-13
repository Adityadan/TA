<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProsesProduksiBauksit extends Model
{
    protected $table='proses_produksi_bauksit';
    public function bauksit()
    {
        return $this->belongsTo('App\Models\Bauksit','bauksit_id','id');
    }
    public function proses()
    {
        return $this->belongsTo('App\Models\Proses','proses_id','id');
    }
}
