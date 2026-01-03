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

    protected $appends = ['featured_image_url'];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function getFeaturedImageUrlAttribute(): ?string
    {
        if (!$this->featured_image) {
            return null;
        }

        if (str_starts_with($this->featured_image, 'http')) {
            return $this->featured_image;
        }

        $base = rtrim(config('services.cloudinary.base_url'), '/');

        return $base . '/' . ltrim($this->featured_image, '/');
    }
}
