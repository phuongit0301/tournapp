<?php
namespace App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
class AppHelper
{

    /*
    upload file to S3
    params: 
        $image
    return:
        string: S3 relative path
    */
    public function uploadFileToS3($image)
    {
        $imageFileName = time() . '.' . $image->getClientOriginalExtension();
        $s3 = \Storage::disk('s3');
        $filePath = '/cms-upload/' . $imageFileName;
        $s3->put($filePath, file_get_contents($image), 'public');
        return $filePath;
    }
}