<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;

use Illuminate\Http\Request;

class MainController extends Controller
{
   

    public function index()
    {
        $data= Category::all();
        $products=Product::all();
        return view('pages.home')->with('data',$data)->with('products',$products);
    }

    public function single_product($id)
    {
        $data= Category::all();
        $products=Product::all()->where('id',$id);
     return view('pages.product_details')->with('data',$data)->with('products',$products);
     
    }

    public function products()
    {
        $data= Category::all();
        $products=Product::all();
        return view('pages.products')->with('data',$data)->with('products',$products);
    }

    public function category_product($id)
    {
        $data= Category::all();
        $products=Product::all()->where('category_id',$id);
     return view('pages.category_product')->with('data',$data)->with('products',$products);
     
    }

    public function sub_category_product($id)
    {
        $data= Category::all();
        $products=Product::all()->where('sub_category_id',$id);
     return view('pages.sub_category_product')->with('data',$data)->with('products',$products);
     
    }
}
