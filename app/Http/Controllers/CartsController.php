<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Carts;
use Illuminate\Support\Facades\DB;


class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::check()) {
            $auth_id = Auth::id();
            $cart_products = DB::table('carts')->join('products','cars.user_id','=','products.id')
                ->get();
            dd($cart_products);
            return view('cart',compact('cart_product',$cart_products));

            //https://laravel.com/docs/4.2/queries
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()) {
            $user_id = Auth::id();

            $this->validate($request, [
                'quantity' => 'required|numeric|min:1|max:10',
                'product_id' => 'required|exists:products,id'
            ]);
            $product_id = $request->product_id;
            $quantity = $request->quantity;

//            if(Carts::where('user_id',$user_id)->andWhere('product_id',$product_id)){
//                Carts::update();
//            }

            Carts::create(['user_id'=> $user_id,'product_id'=> $product_id,'quantity' => $quantity]);

        }
        return redirect('/cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
