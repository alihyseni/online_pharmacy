<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id','product_id'];

    public function brands(){
        return $this->belongsTo(Brands::class);
    }

    public function products(){
        return $this->belongsTo(Products::class);
    }
}
