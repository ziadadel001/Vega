<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    // that return mentor data from by on course data
    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'mentor_id');
    }
    public function booking()
    {
        return $this->hasMany(book::class);
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }
}
