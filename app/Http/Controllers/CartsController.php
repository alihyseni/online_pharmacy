<?php

namespace App\Http\Controllers;

use App\Products;
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

            $random_products = Products::select('id','name','price','image')->inRandomOrder()->take(4)->get();


            $cart_products = DB::table('carts')
                ->where('carts.user_id',$auth_id)
                ->join('products','products.id','=','carts.user_id')
                ->select('carts.id','carts.user_id', 'carts.product_id','carts.quantity','.products.created_at','products.brands_id','products.name','products.price','products.image')
                ->get();
            return view('cart',compact('cart_products',$cart_products))->with('random_products',$random_products);

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
            //Check if product exists in Carts table
            if(Carts::where(['product_id' => $product_id, 'user_id' => $user_id])->first()){
                return $this->update($product_id, $quantity);
            }
            else{
                    Carts::create(['user_id'=> $user_id,'product_id'=> $product_id,'quantity' => $quantity]);
                }
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


    public function update($id,$quantity)
    {

        $carts = Carts::where('product_id', $id)->get();
        $quantity = $carts->quantity + $quantity;
        $carts->update(array('quantity' => $quantity));
        return redirect('/cart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Carts::findOrFail($id)->delete();
        return redirect('/cart');
    }

}
