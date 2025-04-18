<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
     ];

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
