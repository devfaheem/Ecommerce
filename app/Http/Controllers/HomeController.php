<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sections = config("proud_india.section");
           
       //  $productcategory = ProductCategory::all();

        $user_id = Auth::user()->id;

       $products = DB::table('products')->join('product_categories', 'product_categories.id', '=', 'products.productcategory_id')->join('brands', 'brands.id', '=', 'products.brand_id')->select('products.*','product_categories.name as productcategory','brands.name as brand')->get()->toArray();
         
        return view('home.index', compact('products','productcategory'));
    }

 

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
