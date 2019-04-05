<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductDetailsController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function viewDetails(Request $request, $id)
    {
        //
        $product_id = $request->route('id');
          
    $productRows = DB::table('products')->join('product_categories', 'product_categories.id', '=', 'products.productcategory_id')->join('brands', 'brands.id', '=', 'products.brand_id')->select('products.*','product_categories.name as productcategory','brands.name as brand')->where('products.id', '=', $product_id )->get();


         // $productRows = Product::findOrFail($id)->toArray();
         return view('home.product_details',compact('productRows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        //return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
