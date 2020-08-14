@extends('admin.admin_layout')
@section('admin_content')

	
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="#">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Update Product</a></li>
</ul>

<div class="row-fluid ">
    
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
              
                    <h4>Update Product</h4>
    
    
               <div class="card-body border border-primary">
    
                    <form action="{{url('product'.'/'.$item->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                
                          
            
                     <div class="form-group">

                      <div class=" col-md-4 ">
                        <label>Upload Image </label>
                      <input type="file"  class="form-control" name="image" value="" required>
                        </div>
            
                           
                  
                       <div class="form-group d-flex">
                        <div class=" col-md-8 ">
                          <label>Product Name </label>
                        <input type="text" style="height: 35px" class="form-control" value="" name="p_name" required>
                          </div>
                         
                          <div class=" col-md-4 ">
                            <label>Product Code </label>
                            <input type="number" style="height: 35px" class="form-control" value="" name="p_code" required>
                            </div>

                       </div>

                         <div class="form-group d-flex">

                          <div class=" col-md-6 ">
                            <label>Product Price </label>
                            <input type="number" style="height: 35px" class="form-control" value="" name="p_price" required>
                            </div>

                            <div class="form-group col-md-6">
                              <label for="inputState">Color</label>
                              <select id="inputState" class="form-control" value="" name="p_color">
                                <option selected>Choose Color...</option>
                                <option value="Red">Red</option>
                                <option value="Black">Black</option>
                                <option value="Blue">Blue</option>
                              </select>
                           </div>


                         </div>
  

                          
                              
                            
                             <div class="form-group d-flex">
                             <div class="form-group col-md-6">
                                <label for="inputState">Main Category</label>
                                <select id="inputState" class="form-control" value="" name="m_category">
                                  <option selected>Choose...</option>
                                  @php
                                     $data=App\SubCategory::all(); 
                                  @endphp
                                  @foreach ($data as $item)
                                <option value="{{$item->category->id}}">{{$item->category->name}}</option>   
                                  @endforeach 
                                </select>
                             </div>

                             <div class="form-group col-md-6">
                                <label for="inputState">Sub Category</label>
                                <select id="inputState" class="form-control" value="" name="s_category">
                                  <option selected>Choose...</option>
                                  @foreach ($data as $item)
                                <option value="{{$item->id}}">{{$item->s_name}}</option>   
                                  @endforeach 
                                </select>
                                 </div>
                             </div>

                             
                             
                                 <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" style="width: 100%" value=""></textarea>
                                     </div>
                                     
    
                           <button type="submit" class="btn btn-success">Update</button>
  
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