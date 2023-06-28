<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Perusahaan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'perusahaan';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function industri(): BelongsTo
    {
        return $this->belongsTo(Industri::class);
    }

    public function lowongan(): HasMany
    {
        return $this->hasMany(Lowongan::class);
    }
}
