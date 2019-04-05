<?php

namespace App\Http\Controllers;
use App\Product;
use App\Order;

use Cart;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function addTocart(Request $request)
    {
        //  dd($request->all());
        $productId = $request->productId;
    
        $productById = Product::where('id', $productId)->first();

        Cart::add([
            'id' => $productId,
            'name' => $productById->name,
            'price' => $productById->price,
            'qty' => $request->quantity,  
            'options' => [ 
                'size' => $request->size,
                'color' => $request->color,
                'image' => $productById->image  
            ]
        ]);

         //dd($data);
          
        return redirect('/products/cart-show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function cartShow()
    {
        //
        $cartProducts = Cart::content();

       // dd($cartProducts);

        return view('home.cart',['cartProducts'=>$cartProducts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function updateCart(Request $request)
    {
        //
        //dd($request->all());
        Cart::update($request->rowId, $request->qty);

        return redirect('/products/cart-show')->with('success_msg','Cart updated successfully..!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function removeCartproduct($rowId)
    {
        //
        Cart::remove($rowId);

         return redirect('/products/cart-show')->with('success_msg','Cart product removed successfully..!!');
    }

    public function checkOut()
    {
        //

        $data = Cart::content();

        //dd($data);

        return view('home.checkout',['data'=>$data]);
    }

    public function chckout(){

        return Order::createOrder();
    }

 
}
