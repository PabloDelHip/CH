<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
}
