<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    public function hotel()
    {
        return $this->hasMany(Hotel::class);
    }
}
