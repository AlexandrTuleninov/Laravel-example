<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    public function getOwnerOnPhoto(){
        $photo = Photo::find(1);
        foreach ($photo->owners as $owner){
            dump($owner);
        }
    }
    public function getGroundOnPhoto(){
        $photo = Photo::find(1);
        foreach ($photo->grounds as $ground){
            dump($ground);
        }
    }
}
