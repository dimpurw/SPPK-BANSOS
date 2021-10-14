<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table        = 'kriteria';
    protected $guarded      = [];

    public function crip() {
        return $this->hasMany(\App\Crip::class);
    }

}
