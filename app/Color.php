<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function families() {
        return $this->belongsToMany("App\Family", "color_family", "color_id", "family_id");
    }

}
