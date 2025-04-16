<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Projects;
class Services extends Model
{
    use HasFactory;
    public function projects(){
        return $this->belongsToMany(Projects::class,'project_services');
    }
}
