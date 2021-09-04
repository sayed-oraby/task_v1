<?php

use App\Libs\Upload;

if (! function_exists('upload')) {

    function upload() {
        return new Upload();
    }

}

if (! function_exists('Upload_Path')) {

    function Upload_Path($img = null) {

        if ($img == null) {
            return public_path('/uploads/images');
        } else {
            return public_path('/uploads/images') . '/' . $img;
        }

    }

}


if (! function_exists('Image_Path')) {

    function Image_Path($img = null) {

        $existImage = public_path('/uploads/images') . '/' . $img;

        if (! File::exists($existImage) || $img == null) {
            return public_path('img/no-image.png');
        } else {
            return asset('/uploads/images') . '/' . $img;
        }

    }

}