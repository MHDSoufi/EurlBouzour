<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Session;

class ImagesController extends Controller
{
     public function fileUpload(Request $request)
    {

    	$_IMAGE = $request->file('file');
        $filename = time().'_'.Str::random(5).'.'.$_IMAGE->getClientOriginalExtension();
        $uploadPath = public_path().'/images/promotions/';
        $_IMAGE->move($uploadPath,$filename);

        echo ($filename);

        	
        
    }

    public function removeUpload(Request $request)
    {   
       
        try{

            $image = str_replace('"', '', $request->file);
            $directory = public_path() .  '/images/promotions/' . $image;
            @unlink(public_path() .  '/images/promotions/' . $image );

        }
        catch(Exception $e) {

            //echo 'Message: ' .$e->getMessage();

        }
        finally{

            $message = "success";

        }

        return json_encode($image); 
        
    }
}
