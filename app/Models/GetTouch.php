<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetTouch extends Model
{
    use HasFactory;
    protected $table = 'gettouch';

    protected $fillable = [

        'image',
        'link'
       
        
        
    ];

}
