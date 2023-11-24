<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Globo extends Model
{
    protected $fillable = [
        'bano',
        'ducha',
        'tomar',
        'lavar',
        'producto',
        'ducha_mes',
        'tomar_mes',
        'lavar_mes',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
