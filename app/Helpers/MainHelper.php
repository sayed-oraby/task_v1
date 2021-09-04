<?php

use App\Models\Wishlist;

if (! function_exists('check_user_wishlist')) {

    function check_user_wishlist($user_id,$product_id) {
       
        $check = Wishlist::where('user_id',$user_id)->where('product_id',$product_id)->first();

        if($check != null) {
            return 'active_wishlist';
        } else {
            return '';
        }
    }
}


if (! function_exists('Gender')) {

    function Gender() {
       
        $type = [
            '0' => 'ولد',
            '1' => 'بنت'
           
        ];

        return $type;
    }
}


if (! function_exists('Status')) {

    function Status() {
       
        $status = [
            '0' => 'غير مفعل',
            '1' => 'مفعل'
           
        ];

        return $status;
    }
}

if (! function_exists('YesOrNo')) {

    function YesOrNo() {
       
        $status = [
            '1' => 'نعم',
            '2' => 'لا'
           
        ];

        return $status;
    }
}



if (! function_exists('add3dots')) {

    function add3dots($string, $repl, $limit) 
    {
      if(strlen($string) > $limit) 
      {
        return substr($string, 0, $limit) . $repl; 
      }
      else 
      {
        return $string;
      }
    }

}



if (! function_exists('Main_Status')) {

    function Main_Status() {
       
        $status = [
            'on' => 'on',
            'off' => 'off'
           
        ];

        return $status;
    }
}