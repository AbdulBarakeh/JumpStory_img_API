<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //get images from the upload directory
        $path = $_SERVER['DOCUMENT_ROOT'].'/jumpstory_img_api';
        $imagesdir = $path.'/uploads';
        $images = array();
        foreach(glob($imagesdir.'/*.*') as $file) {
            array_push($images,$file);
        }

        $data = array(
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
        $data = array(
            'title'=>'Upload Image view'
        );
        return view('pages.upload')->with($data);

    }

}
