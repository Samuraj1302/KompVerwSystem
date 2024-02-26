<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lagerort extends Model
{
   public function komponentens(): HasMany
    {
        return $this->hasMany(Komponenten::class);
    }
}
