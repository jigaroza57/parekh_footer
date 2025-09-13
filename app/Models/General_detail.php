<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General_detail extends Model
{
    use HasFactory;

    protected $table = 'general_details';

    protected $fillable = [

        'address',
        'phone',
        'fb_link',
        'insta_link',
        'about_us'
    ];
}
