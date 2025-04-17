<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
class Service extends Model
{
    use HasFactory;
    public function project(){
        return $this->belongsToMany(Project::class,'project_services');
    }
}
