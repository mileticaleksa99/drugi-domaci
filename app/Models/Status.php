<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    const ALIVE = 'Alive';
    const DEAD = 'Dead';
    const UNKNOWN = 'Unknown';
    const MISSING = 'Missing';
    const IN_PRISON = 'In prison';

    use HasFactory;

    protected $table = 'statuses';

    protected $fillable = [
        'status'
    ];

    public function villains()
    {
        return $this->hasMany(Villain::class);
    }
}
