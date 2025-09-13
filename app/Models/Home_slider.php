<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_slider extends Model
{
    use HasFactory;

    protected $table = 'home_sliders';

    protected $fillable = [

        'image',
        'image_originalname',
        'status'
        
    ];
}
