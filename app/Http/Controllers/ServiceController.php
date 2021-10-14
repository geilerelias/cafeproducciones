<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class ServiceController extends Controller
{
    //
    public function getImages($route)
    {
        $directory = base_path() . '\\resources\\images\\services\\' . $route;
        $dirint = dir($directory);
        $images = array();
        while (($archivo = $dirint->read()) !== false) {
            if ($archivo != "." && $archivo != "..") {
                echo $archivo;
                array_push($images, $archivo);
                echo '<img src="' . $directory . "/" . $archivo . '">' . "\n";
            }
        }
        return json_encode($images);
        $dirint->close();
    }

    public function show($id)
    {

    }

}
