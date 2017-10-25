<?php

namespace App\Helper;


use App\Article;
use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use Illuminate\Support\Facades\Storage;

class Helper
{

    /**
     * @param Request $request
     * @param string $uploadField
     * @param string $uploadFolder
     * @return string
     */
     public function storeImage(Request $request, $uploadField = 'cover_image', $uploadFolder='cover_images'){
         $fileNameToStore = '';

         // handle File upload
         if($request->hasFile($uploadField)){

                 //Get filename with the extension
             $filenameWithExt= $request->file($uploadField)->getClientOriginalName();
             //Get just filename
             $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
             // get just extension
             $extension = $request->file($uploadField)->getClientOriginalExtension();
             //filename to store
             $fileNameToStore = $filename.'_'.time().'.'.$extension;
             //upload Image
             $path= $request->file($uploadField)->storeAs('public/'.$uploadFolder ,$fileNameToStore);
         }else{
             $fileNameToStore='noimage.jpg';
         }

         return $fileNameToStore;
     }

    /**
     * @param Article $article
     * @param string $uploadFolder
     */

    public function deleteImage(Article $article, $uploadFolder='cover_images')
    {
        if($article->cover_image!= 'noimage.jpg'){
            //delete Image
            Storage::delete('public/'.$uploadFolder.'/'.$article->cover_image);
        }


         }

    }