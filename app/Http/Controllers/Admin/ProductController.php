<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Brand;
use App\Product;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
                // $products = Product::all();
        $products = DB::table('products')->join('product_categories', 'product_categories.id', '=', 'products.productcategory_id')->join('brands', 'brands.id', '=', 'products.brand_id')->select('products.*','product_categories.name as productcategory','brands.name as brand')->get()->toArray();
        // echo "<pre>";
        // print_r($products);
        // echo "<pre>"; 
     return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $colors = config("proud_india.colors");
        $sizes = config("proud_india.sizes");
        // dd($colors); 
        $brand = Brand::all();
        $productcategory = ProductCategory::all();
        return view('admin.products.create',compact('productcategory','brand','colors','sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

         $this->validate($request,[
            'sku' => 'required|string|max:255',
            'brandname' => 'required',
            'productcategory' => 'required',
            'name' => 'required|string|max:255',
            'description' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'

        ]); 

          $product = new Product($request->input()) ;
     
         if($file = $request->hasFile('image')) {
            
            $file = $request->file('image') ;
            
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $product->image = $fileName ;
        }


         if($file1 = $request->hasFile('image1')) {
            
            $file1 = $request->file('image1') ;
            
            $fileName1 = $file1->getClientOriginalName() ;
            $destinationPath1 = public_path().'/images/' ;
            $file1->move($destinationPath1,$fileName1);
            $product->image1 = $fileName1 ;
        }


         if($file2 = $request->hasFile('image2')) {
            
            $file2 = $request->file('image2') ;
            
            $fileName2 = $file2->getClientOriginalName() ;
            $destinationPath2 = public_path().'/images/' ;
            $file2->move($destinationPath2,$fileName2);
            $product->image2 = $fileName2 ;
        }


         if($file3 = $request->hasFile('image3')) {
            
            $file3 = $request->file('image3') ;
            
            $fileName3 = $file3->getClientOriginalName() ;
            $destinationPath3 = public_path().'/images/' ;
            $file3->move($destinationPath3,$fileName3);
            $product->image3 = $fileName3 ;
        }


         // $image = $request->file('image');
         // $new_name = $image->getClientOriginalExtension();
         // $image->move(public_path("images"), $new_name);

         // $image1 = $request->file('image1');
         // $new_name1 = $image1->getClientOriginalExtension();
         // $image1->move(public_path("images"), $new_name1);

         // $image2 = $request->file('image2');
         // $new_name2 = $image2->getClientOriginalExtension();
         // $image2->move(public_path("images"), $new_name2);

         // $image3 = $request->file('image3');
         // $new_name3 = $image3->getClientOriginalExtension();
         // $image3->move(public_path("images"), $new_name3);


        $siz = $request->size;
        $sizes = implode(',', $siz);
         $data['size'] = $sizes; 

           $col = $request->color;
        $colors = implode(',', $col);
         $data['color'] = $colors; 

         $data['brand_id'] = $request->brandname;   
         $data['productcategory_id'] = $request->productcategory;
         $data['image'] = $fileName; 
          $data['image1'] = $fileName1; 
           $data['image2'] = $fileName2; 
            $data['image3'] = $fileName3; 

            //dd($data);

        Product::create($data);
        return redirect()->route('admin.product')->with('success_msg','Product Category Created Successfully');
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
        $colors = config("proud_india.colors");
        $sizes = config("proud_india.sizes");

        $brand = Brand::all();
        $productcategory = ProductCategory::all();
         $product = Product::find($id);
         // echo "<pre>";
         // print_r($brand);
         // echo "<pre>";
         // exit();
         return  view('admin.products.edit',compact('product','productcategory','brand','sizes','colors'));
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
        $data = $request->all();


         $this->validate($request,[
            'sku' => 'required|string|max:255',
            'brandname' => 'required',
            'productcategory' => 'required',
            'name' => 'required|string|max:255',
            'description' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'

        ]); 
         $product = new Product($request->input()) ;
     
         if($file = $request->hasFile('image')) {
            
            $file = $request->file('image') ;
            
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $product->image = $fileName ;
        }


         if($file1 = $request->hasFile('image1')) {
            
            $file1 = $request->file('image1') ;
            
            $fileName1 = $file1->getClientOriginalName() ;
            $destinationPath1 = public_path().'/images/' ;
            $file1->move($destinationPath1,$fileName1);
            $product->image1 = $fileName1 ;
        }


         if($file2 = $request->hasFile('image2')) {
            
            $file2 = $request->file('image2') ;
            
            $fileName2 = $file2->getClientOriginalName() ;
            $destinationPath2 = public_path().'/images/' ;
            $file2->move($destinationPath2,$fileName2);
            $product->image2 = $fileName2 ;
        }


         if($file3 = $request->hasFile('image3')) {
            
            $file3 = $request->file('image3') ;
            
            $fileName3 = $file3->getClientOriginalName() ;
            $destinationPath3 = public_path().'/images/' ;
            $file3->move($destinationPath3,$fileName3);
            $product->image3 = $fileName3 ;
        }


         // $image = $request->file('image');
         // $new_name = $image->getClientOriginalExtension();
         // $image->move(public_path("images"), $new_name);

         // $image1 = $request->file('image1');
         // $new_name1 = $image1->getClientOriginalExtension();
         // $image1->move(public_path("images"), $new_name1);

         // $image2 = $request->file('image2');
         // $new_name2 = $image2->getClientOriginalExtension();
         // $image2->move(public_path("images"), $new_name2);

         // $image3 = $request->file('image3');
         // $new_name3 = $image3->getClientOriginalExtension();
         // $image3->move(public_path("images"), $new_name3);

         $data['brand_id'] = $request->brandname;   
         $data['productcategory_id'] = $request->productcategory;
         $data['image'] = $file; 
          $data['image1'] = $file1; 
           $data['image2'] = $file2; 
            $data['image3'] = $file3;
         Product::find($id)->update($data);
        return redirect()->route('admin.product')->with('success_msg','Product Updated Successfully'); 
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
         Product::find($id)->delete();
         return redirect()->route('admin.product')->with('success_msg','Product Deleted Successfully'); 
    }
}
