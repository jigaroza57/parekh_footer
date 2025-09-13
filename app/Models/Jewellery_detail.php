<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jewellery_detail extends Model
{
    use HasFactory;

    protected $table = 'jewellery_details';

    protected $fillable = [

        'detail',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'image_6'
        
    ];
}
