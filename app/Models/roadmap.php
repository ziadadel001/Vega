<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roadmap extends Model
{
    use HasFactory;
    public function steps()
    {
        return $this->hasMany(roadmap_step::class);
    }
}
