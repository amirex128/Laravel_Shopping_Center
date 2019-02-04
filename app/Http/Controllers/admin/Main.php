<?php
/**
 * Created by PhpStorm.
 * User: Amirex
 * Date: 29/01/2019
 * Time: 01:46 PM
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class Main extends Controller
{

    public function upLoadImage($imageFile)
    {
        $arrayPathImage=[];
        $i=0;
        foreach ([512=>512,256=>256,128=>128] as $key=>$value){
            $routeImage="upload/image/";
            $imagePath=str_slug(Carbon::now()->toDateTimeString())."__".$key."_".$value."__".$imageFile->getClientOriginalName();
            $pathImage=public_path($routeImage).$imagePath;
            Image::make($imageFile)->resize($key,$value)->save($pathImage);
            $arrayPathImage[$i]=$routeImage.$imagePath;
            $i++;
        }

        return $arrayPathImage;

    }

}