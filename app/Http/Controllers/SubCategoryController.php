<?php

namespace App\Http\Controllers;

use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alldata=SubCategory::all();

       return view('admin.allCategories')->with('data',$alldata);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
       return view('admin.create_subcategory')->with('data',$data);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =new SubCategory;
        $data->category_id=$request->m_category;
        $data->s_name=$request->s_name;
        $data->description=$request->description;
        $data->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory,$id)
    {
        $data=SubCategory::find($id);
        $data->category_id=$request->m_category;
        $data->s_name=$request->s_name;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory,$id)
    {
        $data=SubCategory::find($id);
        $data->delete();

        return redirect()->back();
    }
}
