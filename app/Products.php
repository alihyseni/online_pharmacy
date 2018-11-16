<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['name', 'description', 'ingredients', 'usage', 'price'];


    public function brands(){
        return $this->belongsTo(Brands::class);
    }
}
