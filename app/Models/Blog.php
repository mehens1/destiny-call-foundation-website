<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'category_id',
        'meta_title',
        'meta_description',
        'featured_image',
        'status',
        'created_at',

    ];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
