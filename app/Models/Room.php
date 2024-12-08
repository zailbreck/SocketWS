<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    public function devices(): HasMany
    {
        return $this->hasMany(Device::class);
    }
}
