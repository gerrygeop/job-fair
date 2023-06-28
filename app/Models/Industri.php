<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Industri extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'industri';

    public function perusahaan(): HasMany
    {
        return $this->hasMany(Perusahaan::class);
    }
}
