<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unterkategorien extends Model
{
    public function kategoriens(): BelongsTo
    {
        return $this->belongsTo(Kategorien::class);
    }

    public function komponentens(): HasMany
    {
        return $this->hasMany(Komponenten::class);
    }
}
