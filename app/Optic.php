<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Optic extends Model
{
    public function family() {
        return $this->belongsTo(Family::class);
    }

}
