<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $fillable = ['name','image'];


    public function products(){
        return $this->hasMany(Products::class);
    }

}
