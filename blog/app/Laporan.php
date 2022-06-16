<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    public function users()
    {
        return $this->belongsTo('App\User','users_id','id');
    }
}
