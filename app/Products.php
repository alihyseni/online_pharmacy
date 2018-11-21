<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['brands_id', 'name', 'description', 'ingredients', 'usage', 'price','image'];



    public function brands(){
        return $this->belongsTo(Brands::class);
    }
}
