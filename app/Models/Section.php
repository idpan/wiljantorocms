<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'hero_header',
        'hero_sub_header',
        'about_header',
        'about_content',
        'featured_project_header',
        'featured_project_sub_header',
        'story_header',
        'story_content',
        'vision_header',
        'vision_content',
        'mission_header',
        'mission_content',
    ];
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
