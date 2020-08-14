<?php

namespace App;

use App\SubCategory;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];
    

    public function sub_category(){

        return $this->belongsTo(SubCategory::class);

    } 
}
