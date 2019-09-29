<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Led extends Model
{
    //Si quiero que una columna NO se pueda escribir, tengo que ponerla dentro de la variable $guarde
    public function family() {
        return $this->belongsTo(Family::class);
    }

}
