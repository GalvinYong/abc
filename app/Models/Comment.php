<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Allow mass assignment for these fields
    protected $fillable = [
        'content',
        'post_id',
        'user_id',
    ];
}
