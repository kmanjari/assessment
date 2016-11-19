<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded = [];

    /**
     * A hotel can have many feedback comments
     * each entry in comments table will
     * have a FK to hotels table
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
