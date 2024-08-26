<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const CATEGORY_STRENGTH = 'Strength';
    const CATEGORY_WARM_UP = 'Warm Up';
    const CATEGORY_CARDIO = 'Cardio';
    const CATEGORY_FLEXIBILITY = 'Flexibility';
    const CATEGORY_MOBILITY = 'Mobility';
    const CATEGORY_CORE = 'Core';

    use HasFactory;

    protected $fillable = [
        'name'
    ];
}
