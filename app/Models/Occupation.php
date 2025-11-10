<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Occupation extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function biographies(): HasMany
    {
        return $this->hasMany(Biography::class);
    }
}
