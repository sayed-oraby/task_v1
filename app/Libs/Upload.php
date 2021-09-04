<?php

namespace App\Libs;

use File;

class Upload
{

    public function UploadImage($name, $path, $model)
    {

        $filename = '';

        if (request()->hasFile($name)) {


            if (isset($model)) {


                if ($model->{$name} != '' or $model->{$name} != null) {

                    $oldimage = Upload_Path() . '/' . $model->{$name};


                    if (File::exists($oldimage)) {
                        unlink($oldimage);
                    }
                }

                $filename = uniqid() . '.' . request()->file($name)->getClientOriginalName();

                request()->file($name)->move($path, $filename);

                return $filename;

            } else {


                $filename = uniqid() . '.' . request()->file($name)->getClientOriginalName();

                request()->file($name)->move($path, $filename);

                return $filename;

            }
        }

        if (request()->file($name) == '') {

            $input = $model->{$name};

            return $input;
        } 

    }


    public function UploadFile($name, $path, $model)
    {

        $filename = '';

        if (request()->hasFile($name)) {

            if (isset($model)) {


                if ($model->{$name} != '' or $model->{$name} != null) {

                    $oldimage = Upload_Path() . '/' . $model->{$name};


                    if (File::exists($oldimage)) {
                        unlink($oldimage);
                    }
                }

                $filename = uniqid() . '.' . request()->file($name)->getClientOriginalName();

                request()->file($name)->move($path, $filename);

                return $filename;

            } else {


                $filename = uniqid() . '.' . request()->file($name)->getClientOriginalName();

                request()->file($name)->move($path, $filename);

                return $filename;

            }
        }

        if (request()->file($name)) {

            $input = $model->{$name};

            return $input;
        }

    }


}




