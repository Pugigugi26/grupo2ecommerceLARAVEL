<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    //Si quiero que una columna NO se pueda escribir, tengo que ponerla dentro de la variable $guarde
public $table ="families";
    public $guarded =["loquenoquieroquesevea"];
}
