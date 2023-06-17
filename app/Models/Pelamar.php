<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pelamar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'pelamar';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
