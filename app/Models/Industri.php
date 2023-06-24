<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Industri extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'industri';

    public function perusahaan(): BelongsToMany
    {
        return $this->belongsToMany(Perusahaan::class);
    }
}
