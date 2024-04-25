<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mentor extends Model
{
    use HasFactory;
    public function booking()
    {
        return $this->hasMany(book::class);
    }
    public function courses()
    {
        return $this->hasMany(course::class);
    }
}
