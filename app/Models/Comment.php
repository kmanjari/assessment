<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * setting belong to relationship in case we
     * need to fetch a user on the basis of
     * a comment
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * setting belong to relationship in case we
     * need to fetch a hotel on the basis of
     * a comment
     */
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
