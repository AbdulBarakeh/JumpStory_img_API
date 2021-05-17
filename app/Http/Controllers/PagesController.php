<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $path = $_SERVER['DOCUMENT_ROOT'].'/jumpstory_img_api';
        $imagesdir = $path.'/uploads';
        $images = array();
        foreach(glob($imagesdir.'/*.*') as $file) {
            array_push($images,$file);
        }
        
        //get data from dummy image        
        $im = new \Imagick($imagesdir.'/testImg.jpg');
        /* Get the EXIF information */
        $exifArray = $im->getImageProperties();


        $data = array(
            'exifArray' => $exifArray,
            'title'=>'Index view',
            'images' => $images
        );
        return view('pages.index')->with($data);
    }
    
    public function about(){
        $data = array(
            'title'=>'About view',
            'competences'=> ['Basic PHP', 'Basic Laravel']  
        );
        return view('pages.about')->with($data);

    }
    public function upload(){
        $path = $_SERVER['DOCUMENT_ROOT'].'/jumpstory_img_api';
        $data = array(
            'title'=>'Upload Image view',
            'path' => $path
        );
        return view('pages.upload')->with($data);

    }

}
