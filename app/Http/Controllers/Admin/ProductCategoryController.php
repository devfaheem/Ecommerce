<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use Session;

class ProductCategoryController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        if(Session::has('adminSession')){

        }else{
             return redirect('/admin')->withErrors([
            'message'=> 'Please login to access.']);
        }
         $productcategory = ProductCategory::all();
        // echo "<pre>";
        // print_r($productcategory);
        // echo "<pre>";
         return view('admin.productcategory.index',compact('productcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('admin.productcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name' => 'required|string|max:255',

        ]); 
        ProductCategory::create($request->all());
        return redirect()->route('admin.productcategory')->with('success_msg','Product Category Created Successfully');

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
         $productcategory = ProductCategory::find($id);
         // echo "<pre>";
         // print_r($productcategory);
         // echo "<pre>";
         // exit();
         return  view('admin.productcategory.edit',compact('productcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'name' => 'required|string|max:255',

        ]); 
        ProductCategory::find($id)->update($request->all());
        return redirect()->route('admin.productcategory')->with('success_msg','Product Category Updated Successfully'); 

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
        ProductCategory::find($id)->delete();
         return redirect()->route('admin.productcategory')->with('success_msg','Product Category Deleted Successfully'); 

    }
}
