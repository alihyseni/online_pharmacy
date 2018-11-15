<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    protected $fillable = [
        'name',
        'description',
        'ingredients',
        'usage',
        'price'
    ];


    public function productcategory(){
        return $this->belongsTo(ProductCateogory::class);
    }
}
