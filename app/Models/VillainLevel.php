<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VillainLevel extends Model
{
    const LOW = 'Low level';
    const MEDIUM = 'Medium level';
    const HIGH = 'High level';
    const DANGEROUS = 'Dangerous';
    const VERY_DANGEROUS = 'Very dangerous';
    const GOD_LEVEL = 'God level';

    protected $table = 'levels';

    protected $fillable = [
        'level'
    ];

    public function villains()
    {
        return $this->hasMany(Villain::class);
    }

    use HasFactory;
}
