<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Komponenten extends Model
{
    public function lagerorts(): BelongsTo
    {
        return $this->belongsTo(Lagerort::class);
    }

    public function kategoriens(): BelongsTo
    {
        return $this->belongsTo(Kategorien::class);
    }

    public function unterkategoriens(): BelongsTo
    {
        return $this->belongsTo(Unterkategorien::class);
    }

    public function ausleihhistories(): BelongsTo
    {
        return $this->belongsTo(Ausleihhistorie::class);
    }
}
