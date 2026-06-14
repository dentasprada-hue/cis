<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class PageContent extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'page_name',
        'key',
        'locale',
        'type',
        'value',
    ];
}
