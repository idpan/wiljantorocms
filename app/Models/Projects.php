<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Services;

class Projects extends Model
{
    use HasFactory;

    public function services(){
        return $this->belongsToMany(Services::class,'project_services');
    }
}
