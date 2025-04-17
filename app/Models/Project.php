<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Project extends Model
{
    use HasFactory;

    public function services(){
        return $this->belongsToMany(Services::class,'project_services');
    }
}
