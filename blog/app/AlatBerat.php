<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlatBerat extends Model
{
    protected $table = 'alat_berat';

    public function tambang()
    {
        return $this->belongsTo('App\Tambang','tambang_id');
    }
    public function rencana_kegiatan()
    {
        return $this->belongsTo('App\RencanaKegiatan','rencana_kegiatan_id');
    }
    public function wp_port()
    {
        return $this->hasMany('App\WpPort','wp_port_id','id');
    }
    public function pit_wp()
    {
        return $this->hasMany('App\PitWp','pit_wp_id','id');
    }
}
