<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ground;
use App\Owner;

class GroundController extends Controller
{
    
    public function index(){
        $grounds = Ground::all();
        foreach($grounds as $ground){
            dump($ground->id);
            dump($ground->owners);
        }
        
    }

    public function payment(){
        $grounds = Ground::all();
        foreach($grounds as $ground){
            dump($ground->id);
            dump($ground->payments);
        } 
    }

    public function inform(){
        $grounds = Ground::all();
        foreach($grounds as $ground){
        dump($ground->id);
        dump($ground->inform);
        }
    }

    public function photos(){
        $ground=Ground::find(1);
        foreach($ground->photos as $photo){
            dump($photo);
        }
    }
}
