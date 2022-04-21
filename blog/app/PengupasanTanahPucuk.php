<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengupasanTanahPucuk extends Model
{
    protected $table = 'pengupasan_tanahpucuk';
    public function tambang()
    {
        return $this->belongsTo('App\Tambang','tambang_id');
    }
}
