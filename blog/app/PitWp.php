<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PitWp extends Model
{
    protected $table = 'pit_wp';
    public function tambang()
    {
        return $this->belongsTo('App\Tambang','tambang_id');
    }
    public function alat_berat()
    {
        return $this->belongsTo('App\AlatBerat','alat_berat_id');
    }
}
