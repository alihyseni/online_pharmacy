<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = DB::table('countries')->get();
        return view('checkout',compact('countries',$countries));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        if(Auth::check()) {
            $user_id = Auth::id();
            $this->validate($request, [
                'city_id' => 'required',
                'firstname' => 'required',
                'lastname' => 'required',
                'address' => 'required',
                'province' => 'required',
                'phone' => 'required|numeric|min:8',
                'terms' => 'required'
            ]);

            $shipping[] = $request->except('terms','paymentbank','paymentarrival','_token');
            $shipping[0]['user_id'] = $user_id;

            DB::table('shipping')->insert($shipping);
//            $product_id = $request->product_id;
//            $quantity = $request->quantity;
//            //dd(Carts::where([['product_id','=', $product_id], ['user_id', '=', $user_id]])->get(),$user_id,$product_id);
//            //Check if product exists in Carts table
//            if(Carts::where(['product_id' => $product_id, 'user_id' => $user_id])->first()){
//                return $this->update($product_id, $quantity);
//            }
//            else{
//                Carts::create(['user_id'=> $user_id,'product_id'=> $product_id,'quantity' => $quantity]);
//            }
        }
        return view('order-completed');
    }

}
