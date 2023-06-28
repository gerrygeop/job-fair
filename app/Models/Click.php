<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Click extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function lowongan(): BelongsTo
    {
        return $this->belongsTo(Lowongan::class);
    }
}
