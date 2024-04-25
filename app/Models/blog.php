<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    // that return mentor data from mentor_id on blog data
    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'mentor_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
