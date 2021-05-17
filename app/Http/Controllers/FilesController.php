<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
class FilesController extends Controller
{
    public function upload(Request $request){

        $path = $_SERVER['DOCUMENT_ROOT'].'/jumpstory_img_api';
        if (isset($_POST['submit'])) {
            $file = $_FILES['file'];

            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];
            $fileType = $file['type'];

            $fileNameArray = explode('.',$fileName);//seperate name and extenstion
            $fileNameNoExtenstion = reset($fileNameArray);
            $fileExtension = strtolower(end($fileNameArray));
            $allowedFiletypes = array('jpg', 'jpeg');
            if (in_array($fileExtension, $allowedFiletypes)) {
                if($fileError === 0){ // 0 means no errors occured
                    if ($fileSize < 200000) {// don't upload anything larger than 200MB
                        $fileNameUniqe = $fileNameNoExtenstion.uniqid('',true).'.'.$fileExtension; // creates UID based on current us from epoc. Add extension to new filename.
                        $fileDestination = $path.'/uploads/'.$fileNameUniqe;
                        echo $fileDestination;
                        move_uploaded_file($fileTmpName,$fileDestination);// upload file
                    }else {
                        echo 'File is too large';
                    }
                }else {
                    echo 'Error occured while uploading';
                }
            }else {
                echo 'File type is incompatible!';
            }
        }

        return redirect('/');
    }

    public function loadImageDetails(Request $request){
        $filePath;

        if(isset($_POST['imgpick'])) 
        {
            $filePath = $_POST['imgpick'];
        }

        //Instantiate Imagick object with filepath
        $im = new \Imagick($filePath);
        // Get the EXIF information
        $exifArray = $im->getImageProperties();

        $data = array(
            'exifArray' => $exifArray,
            'title'=>'Detail view'
        );
        return view('pages.detail')->with($data);

    }
}
