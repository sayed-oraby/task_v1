<?php

use App\Models\Areas;
use App\Models\Admin;

use App\Models\Product_Category;
use App\Models\Product;



if (! function_exists('All_Admin')) {

    function All_Admin()
    {
        return Admin::pluck('name','id');
    }
}



if (! function_exists('Product_Category')) {

    function Product_Category()
    {
        return Product_Category::pluck('title','id');
    }
}





if (! function_exists('All_Government')) {

    function All_Government()
    {
        return Areas::where('parent_id',0)->pluck('name','id');
    }
}

if (! function_exists('All_Active_Government')) {

    function All_Active_Government()
    {
        return Areas::where('parent_id',0)->where('status','on')->pluck('name','id');
    }
}

if (! function_exists('All_Area')) {

    function All_Area()
    {
        return Areas::where('parent_id','!=',0)->pluck('name','id');
    }
}
