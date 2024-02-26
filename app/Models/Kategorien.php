<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategorien extends Model
{
    public function unterkategoriens(): HasMany
    {
        return $this->hasMany(Unterkategorien::class);
    }

    public function komponentens(): HasMany
    {
        return $this->hasMany(Komponenten::class);
    }
}
