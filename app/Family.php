<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    //Si quiero que una columna NO se pueda escribir, tengo que ponerla dentro de la variable $guarde
public $table ="families";
    public $guarded =[];

    public function frames() {
        return $this->hasMany(Frame::class);
    }
    public function leds() {
        return $this->hasMany(Led::class);
    }

    public function lenses() {
        return $this->hasMany(Lens::class);
    }

    public function drivers() {
        return $this->hasMany(Driver::class);
    }
}
