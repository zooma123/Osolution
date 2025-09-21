<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['category_id', 'title', 'description', 'priority', 'is_completed', 'image_url'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
