<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DevicePort extends Model
{
    public function device(): HasMany
    {
        return $this->hasMany(Device::class);
    }
}
