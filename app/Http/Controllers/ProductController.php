<?php

namespace App\Http\Controllers;

use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{       
    public function __construct()
    {
        $this->middleware('admin');
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Product::all();
        return view('admin.product')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=SubCategory::all();
        return view('admin.add_product')->with('data',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        


     $data=new Product;

     $file= $request->file('image');
 
         if($file){
             $fileName=time().'.'.$file->getClientOriginalExtension();
                 $file->move('images/',$fileName);
                 $data->image=$fileName;
         }
 
         $data->category_id=$request->m_category;
         $data->sub_category_id=$request->s_category;
         $data->p_name=$request->p_name;
         $data->p_code=$request->p_code;
         $data->p_color=$request->p_color;
         $data->price=$request->p_price;
         $data->description=$request->description;
         $data->save();
 
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        
        $dat=Product::find($id);  
         return view('admin.product_update')->with('item',$dat);
       

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {

        $data =new Product;
        $data=Product::find($id);
        if($file){
            $fileName=time().'.'.$file->getClientOriginalExtension();
                $file->move('images/',$fileName);
                $data->image=$fileName;
        }

        $data->category_id=$request->m_category;
        $data->sub_category_id=$request->s_category;
        $data->p_name=$request->p_name;
        $data->p_code=$request->p_code;
        $data->p_color=$request->p_color;
        $data->price=$request->p_price;
        $data->description=$request->description;
        $data->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        $data =new Product;
        $data=Product::find($id);
        $data->delete();

        return redirect()->back();
    }
}
