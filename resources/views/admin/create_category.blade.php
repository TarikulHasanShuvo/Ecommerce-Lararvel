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
            <div class="col-md-6">
                    <h4>Add Category</h4>
    
                    
    
                    <div class="card-body">
    
                    <form action="{{route('category.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            @if (Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
    
                            @endif    
                             <div class="form-group">
                            <label for="email">Category</label>
                            <input style="height: 35px" type="text" class="form-control" name="c_name" placeholder="Enter Categroy">
                             </div>
    
                             
    
                           <button type="submit" class="btn btn-success">submit</button>
    
                        </form>
    
    
    
    
    
    
                      </div>
                  </div>
    
    
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    
                    
</div><!--/row-->


    
@endsection