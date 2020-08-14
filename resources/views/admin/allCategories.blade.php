@extends('admin.admin_layout')
@section('admin_content')

	
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="#">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Add Category</a></li>
</ul>

<div class="row-fluid ">
    
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col">
              
                    <h4>Add Category</h4>
                
    
                 <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Main Category</th>
                        <th scope="col">Sub Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                      <tr>
                      <th scope="row">{{$item->id}}</th>
                      <td>{{$item->category->name}}</td>
                      <td>{{$item->s_name}}</td>
                      <td>{{$item->description}}</td>
                        <td class="d-flex">
                            <a class="btn btn-success  btn-sm" href="{{route('subcategory.edit',['id'=>$item->id])}}">Edit</a>
                        <a class="btn btn-danger btn-sm ml-2" href="{{route('subcategory.destroy',['id'=>$item->id])}}">Delete</a>

                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
 
    
                    
</div><!--/row-->


    
@endsection