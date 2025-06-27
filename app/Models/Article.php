<?php
// app/Models/Article.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'category',
        'image',
        'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Accessor untuk format tanggal yang lebih friendly
    public function getFormattedDateAttribute()
    {
        return $this->published_at ? $this->published_at->format('d M Y') : $this->created_at->format('d M Y');
    }

    // Accessor untuk estimasi waktu baca
    public function getReadTimeAttribute()
    {
        $wordCount = str_word_count(strip_tags($this->content ?? ''));
        $readTime = ceil($wordCount / 200); // asumsi 200 kata per menit
        return $readTime . ' min read';
    }

    // Scope untuk artikel yang sudah dipublish
    public function scopePublished($query)
    {
        return $query->where('published_at', '<=', now())
                    ->whereNotNull('published_at');
    }

    // Scope untuk artikel terbaru
    public function scopeLatest($query)
    {
        return $query->orderBy('published_at', 'desc');
    }

    // Accessor untuk URL gambar
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            // Jika path sudah lengkap (http/https)
            if (filter_var($this->image, FILTER_VALIDATE_URL)) {
                return $this->image;
            }
            // Jika path relatif
            return asset('storage/' . $this->image);
        }
        // Default image
        return 'https://source.unsplash.com/400x250/?technology,programming';
    }
}
