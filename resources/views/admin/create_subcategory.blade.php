@extends('admin.admin_layout')
@section('admin_content')

	
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="#">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Add Sub Category</a></li>
</ul>

<div class="row-fluid ">
    
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-6">
              
                    <h4>Add Sub Category</h4>
    
    
                    <div class="card-body">
    
                    <form action="{{route('subcategory.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                              
                            
                             
                             <div class="form-group">
                                <label for="inputState">Main Category</label>
                                <select id="inputState" class="form-control" name="m_category">
                                  <option selected>Choose...</option>
                                  @foreach ($data as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>   
                                  @endforeach
                               
                                 
                                </select>
                             </div>

                             <div class="form-group">
                                <label for="s_name">Sub Category</label>
                                <input style="height: 35px" type="text" class="form-control" name="s_name" placeholder="Enter Sub Categroy">
                                 </div>
                             
                                 <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" style="width: 100%"></textarea>
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