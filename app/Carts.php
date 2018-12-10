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
            $cart_item = Carts::where('user_id', $auth_id)->sum('quantity');
            return $cart_item;
        }
        else {
            return $cart_item;
        }
    }
    public static function totalOfItem($id){

        if(Auth::check()) {
            $cart_item = Carts::select('quantity','product_id')->where('id',$id)->first();
            $product_price = Products::findOrFail($cart_item->product_id);
            $total_of_item = $cart_item->quantity * $product_price->price;

            return $total_of_item;
        }
        else {
            return 0;
        }
    }

    public static function cartSubTotal(){

        if(Auth::check()){
            $user_id = Auth::id();
            $total_iteams = Carts::where('user_id', $user_id)->select('quantity','product_id')->get();
            $total_price_item = array();
            foreach($total_iteams as $cart_item){
                $temp = Products::findOrFail($cart_item->product_id);
                $total_price_item[] = $temp->price * $cart_item->quantity;

            }
            $totali = 0;
            foreach($total_price_item as $temp){
                $totali = $temp + $totali;
            }

            return $totali;
            //$product_price = Products::findOrFail($total->product_id);
        }

    }

    public static function cartTotal(){
        $sub_total = self::cartSubTotal();
        if($sub_total > 14){
            return $sub_total;
        }else{
            return $sub_total + self::cartDeliveryPrice();
        }
    }

    public static function cartDeliveryPrice(){
        $delivery_price = 2;
        $sub_total = self::cartSubTotal();
        if($sub_total > 14){
            return $delivery_price;
        }
        else{
            return 0;
        }
    }
}
