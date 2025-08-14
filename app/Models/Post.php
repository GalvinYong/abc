<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Allow mass assignment for these fields
    protected $fillable = [
        'title',
        'content',
        'category_id',
        'user_id',
    ];

    // Relationship: each post belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship: each post belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
