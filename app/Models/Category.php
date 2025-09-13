<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [

        'parent_id',
        'name',
        'slug',
        'image',
        'meta_title'
        
    ];

   
     public function subcategory()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function subCatRecursive()
    {
        return $this->subcategory()->with('subCatRecursive');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
