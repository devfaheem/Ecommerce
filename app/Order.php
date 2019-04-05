<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;

use Cart;

class Order extends Model
{

	   //

	protected $fillable = ['total'];
 
    public function orderCols(){
      return $this->belongsToMany(Product::class);
    }

    public static function createOrder(){

    	  $user = Auth::user();
      $order = $user->orders()->create([
      		'total' => Cart::total()
      ]); // insert order table data

       foreach(Cart::content() as $cData){
        $order->orderCols()->attach($cData->id,[
           'total' => $cData->qty * $cData->price,
           'quantity' => $cData->qty
         ]);
    				}

		}
}
