<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage_setting extends Model
{
    use HasFactory;

    protected $table = 'homepage_settings';

    protected $fillable = [

        'logo',
        'diamond',
        'gold',
        'silver',
        'stone',
        'gift'
        
    ];
}
