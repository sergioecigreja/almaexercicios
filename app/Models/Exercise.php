<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'category', 'video_url', 'image_url', 'muscle_group', 'difficulty', 'requires_equipment'];
    
}
