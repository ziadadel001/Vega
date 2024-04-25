<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roadmap_step extends Model
{
    use HasFactory;

    public function roadmap()
    {
        return $this->belongsTo(Roadmap::class);
    }
}
