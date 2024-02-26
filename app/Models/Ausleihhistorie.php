<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Ausleihhistorie extends Model
{
    public function benutzers(): BelongsTo
    {
        return $this->belongsTo(Benutzer::class);
    }

    public function komponentens(): BelongsTo
    {
        return $this->belongsTo(Komponenten::class);
    }
}
