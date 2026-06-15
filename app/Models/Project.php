<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'title',
        'concept',
        'function',
        'slug',
        'short_description',
        'description',
        'featured_image',
        'gallery_images',
        'category',
        'location',
        'year',
        'scale',
        'is_featured',
        'seo_title',
        'seo_description'
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'is_featured' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($project) {
            if (empty($project->slug)) {
                $project->slug = \Illuminate\Support\Str::slug($project->title);
            }
        });
    }

    /**
     * Scope for featured projects.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function getFeaturedImageUrlAttribute(): ?string
    {
        return self::resolveImageUrl($this->featured_image);
    }

    /**
     * @return array<int, string>
     */
    public function getGalleryImageUrlsAttribute(): array
    {
        return collect($this->gallery_images ?? [])
            ->map(fn (?string $image) => self::resolveImageUrl($image))
            ->filter()
            ->values()
            ->all();
    }

    public static function resolveImageUrl(?string $path): ?string
    {
        if (blank($path)) {
            return null;
        }

        if (Str::startsWith($path, ['http://', 'https://', '//'])) {
            return $path;
        }

        $path = ltrim($path, '/');

        if (! Storage::disk('public')->exists($path) && Storage::disk('local')->exists($path)) {
            Storage::disk('public')->put($path, Storage::disk('local')->get($path));
        }

        if (Storage::disk('public')->exists($path)) {
            return '/storage/'.$path;
        }

        return null;
    }
}
