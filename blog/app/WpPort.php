<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WpPort extends Model
{
    protected $table = "wp_port";
    public function tambang()
    {
        return $this->belongsTo('App\Tambang','tambang_id');
    }
    public function alat_berat()
    {
        return $this->belongsTo('App\AlatBerat','alat_berat_id');
    }
}
