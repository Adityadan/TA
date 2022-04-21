<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tambang extends Model
{
    protected $table = "tambang";
    public function rencana_kegiatan()
    {
        return $this->hasMany('App\RencanaKegiatan','tambang_id','id');
    }
    public function karyawan()
    {
        return $this->hasMany('App\Karyawan','tambang_id','id');
    }
    public function bauksit()
    {
        return $this->hasMany('App\Bauksit','tambang_id','id');
    }
    public function alat_berat()
    {
        return $this->hasMany('App\AlatBerat','tambang_id','id');
    }
    public function penggalihan_bijih()
    {
        return $this->hasMany('App\PenggalihanBijih','tambang_id','id');
    }
    public function wp_port()
    {
        return $this->hasMany('App\WpPort','tambang_id','id');
    }
    public function pit_wp()
    {
        return $this->hasMany('App\PitWp','tambang_id','id');
    }
    public function pengupasan_tanahpucuk()
    {
        return $this->hasMany('App\PengupasanTanahPucuk','tambang_id','id');
    }
}
