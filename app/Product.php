<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Copy Protect

    protected $fillable=['name', 'description', 'size', 'price', 'image', 'category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
        //return $this->belongsTo('Category::class');
    }
}
