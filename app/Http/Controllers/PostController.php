<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        
        dump($posts);
        return;
    }
    public function tags(){
        $posts = Post::all();
        foreach($posts as $post){
            dump($post->tag);
        }
        dd("end");
    }

    public function create(){
        $posts_arr=[
            [
            'content'=>'other',
            'tag'=>'other_tag ',
            ]
            ];
            foreach($posts_arr as $item){
                Post::create($item);
            }
        dd('created'); 
    }
    
    public function update(){
        $post = Post::find(3);
        $post-> update([
            'content'=>'other1',
            'tag'=>'other_tag1',
        ]);
        dd('update');
    }

    public function delete(){
        $post= Post::find(2);
        $post->delete();
        dd("deleted");
    }
    
    //firstOfCreate
    public function firstOfCreate(){
        $post = Post::firstOrCreate(['tag'=>'some_tag'],
        [
            'content'=>'some',
            'tag'=>'some_tag',
            ]
        );
        dump($post->tag);    
        dd("Finish");
    }
}
