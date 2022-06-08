<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function products(){
        return $this->hasMany(Home::class);
    }

    #One To Many Iverse
    public function parent(){
        return $this->belongsTo(Category::class,'parentid');

    }
    #One To Many
    public function children(){
        return $this->hasMany(Category::class,'parentid');
    }
}
