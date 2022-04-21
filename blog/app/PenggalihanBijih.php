<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenggalihanBijih extends Model
{
    protected $table = 'penggalihan_bijih';
    public function tambang()
    {
        return $this->belongsTo('App\Tambang','tambang_id');
    }
}
