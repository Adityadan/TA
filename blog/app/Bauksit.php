<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bauksit extends Model
{
    protected $table = "bauksit";

    public function tambang()
    {
        return $this->belongsTo('App\Tambang','tambang_id');
    }

}
