<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Project extends Model
{

    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    public function project_images()
    {
        return $this->hasMany(Project_image::class);
    }
    public function project_sections()
    {
        return $this->hasMany(Project_section::class);
    }

}
