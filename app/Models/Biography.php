<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Biography extends Model
{
    protected $fillable = [
        'full_name',
        'occupation_id',
        'birth_date',
        'biography',
        'image',
        'featured',
    ];

    public function occupation(): BelongsTo
    {
        return $this->belongsTo(Occupation::class);
    }
}
