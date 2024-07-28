<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Blog_image extends Model
{

    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    public function blogs()
    {
        return $this->belongsTo(Blog::class);
    }

}