<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Villain extends Model
{
    use HasFactory;

    protected $table = 'villains';

    protected $fillable = [
        'name',
        'description',
        'status_id',
        'level_id'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function level()
    {
        return $this->belongsTo(VillainLevel::class);
    }


}
