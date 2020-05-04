<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailcategory extends Model
{
    protected $table = "product_category_details";

    public function products(){
    	return $this->belongsTo('App\products');
    }

    public function category(){
    	return $this->belongsTo('App\category');
    }
}
