<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Factory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'address',
        'location',

    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
