<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
    public function show($slug){

        //1st way
//        $post =DB::table('posts')->where('slug', $slug)->first();


//        $posts = [
//            'my-first-post'=> '1st post',
//            'my-second-post' => '2nd post textttt'
//        ];

//        dd($post);

//        if (!array_key_exists($post, $posts)) {
//            abort(404, 'Sorry, that post was not found');
//        }

//        if (!$post){
//            abort(404);
//        }



//
//        //        2nd way
//        $post = Post::where('slug', $slug)->firstOrFail();
//
//        return view('post', [
//            // 'post' => $posts[$post] ?? 'Nothing here'
////            'post' => $posts[$post]
//            'post' => $post
//        ]);

//        3rd way
        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
