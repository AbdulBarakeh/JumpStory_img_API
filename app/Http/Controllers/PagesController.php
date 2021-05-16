<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
                /* Create the object */
        $im = new \Imagick("/resources/testImg.jpg");

        /* Get the EXIF information */
        $exifArray = $im->getImageProperties("exif:*");

        // /* Loop trough the EXIF properties */
        // foreach ($exifArray as $name => $property)
        // {
        //     echo "{$name} => {$property}<br />\n"; 
        // }
        $data = array(
            'exifArray' => $exifArray,
            'title'=>'Index view'
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
    // public function welcome(){
    //     return view('welcome');
    // }
}
