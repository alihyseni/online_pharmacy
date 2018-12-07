<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Carts extends Model
{
    protected $fillable = ['user_id','product_id','quantity'];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->belongsTo(Products::class);
    }

    public static function cartCount(){
        $cart_item = 0;
        if(Auth::check()) {
            $auth_id = Auth::id();
            $cart_item = Carts::where('user_id', $auth_id)->count();
            return $cart_item;
        }
        else {
            return $cart_item;
        }
    }
    public static function totalOfItem(){

        if(Auth::check()) {
            $auth_id = Auth::id();
            $cart_item = Carts::where('user_id', $auth_id)->count();
            return $cart_item;
        }
        else {
            return 0;
        }
    }
}
