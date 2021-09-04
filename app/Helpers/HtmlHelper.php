<?php




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




