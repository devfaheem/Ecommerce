<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use Session;

class BrandController extends Controller
{ 
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
         $brand = Brand::all();
        // echo "<pre>";
        // print_r($brand);
        // echo "<pre>";
         return view('admin.brand.index',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'name' => 'required|string|max:255',

        ]); 

        $data = array(
            'name' => $request->input('name') 
        );
        Brand::create($data);
        return redirect()->route('admin.brand')->with('success_msg','Brand Created Successfully');

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
        $brand = Brand::find($id);
         // echo "<pre>";
         // print_r($brand);
         // echo "<pre>";
         // exit();
         return  view('admin.brand.edit',compact('brand'));
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
        Brand::find($id)->update($request->all());
        return redirect()->route('admin.brand')->with('success_msg','Brand Updated Successfully'); 

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
       $brand = Brand::findorFail($id);

       $brand->delete();

         return redirect()->route('admin.brand')->with('success_msg','Brand Deleted Successfully'); 

    }
}
