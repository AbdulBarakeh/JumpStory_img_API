<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function upload(Request $request){
        dd($request->all());
    //     $path = $_SERVER['DOCUMENT_ROOT'].'/jumpstory_img_api';
    //     if (isset($_POST['submit'])) {
    //         $file = $_FILES['file'];

    //         $fileName = $file['name'];
    //         $fileTmpName = $file['tmp_name'];
    //         $fileSize = $file['size'];
    //         $fileError = $file['error'];
    //         $fileType = $file['type'];

    //         $fileNameArray = explode('.',$fileName);//seperate name and extenstion
    //         $fileExtension = strtolower(end($fileNameArray));//make file extenstion to lower case to check
    //         $allowedFiletypes = array('jpg', 'jpeg', 'png');
    //         if (in_array($fileExtension, $allowedFiletypes)) {
    //             if($fileError === 0){ // 0 means no errors occured
    //                 if ($fileSize < 200000) {// don't upload anything larger than 200MB
    //                     $fileNameUniqe = uniqid('',true).'.'.$fileExtension; // creates UI based on current us from epoc. Add extension to new filename.
    //                     $fileDestination = $path.'/uploads/'.$fileNameUniqe;
    //                     echo $fileDestination;
    //                     move_uploaded_file($fileTmpName,$fileDestination);// upload file
    //                 }else {
    //                     echo 'File is too large';
    //                 }
    //             }else {
    //                 echo 'Error occured while uploading';
    //             }
    //         }else {
    //             echo 'File type is incompatible!';
    //         }
    //     }
    return 123;

    // return redirect('/');
    }
}
