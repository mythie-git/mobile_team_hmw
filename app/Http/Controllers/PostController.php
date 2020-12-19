<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list(){
        return Post::query()->get();
    }

    public function add(Request $request){
        $data=[
            'post_name'=>$request->post_name,
            'post_content'=>$request->post_content,
            'category_id'=>$request->category_id,
        ];

        $add = Post::query()->create($data);

        return "Ekleme işlemi tamamlandı.";
    }

    public function update(Request $request){
        $data=[
            'post_name'=>$request->post_name,
            'post_content'=>$request->post_content,
            'category_id'=>$request->category_id,
        ];

        $upd = Post::query()->find($request->id);
        $upd->update($data);

        return "Güncelleme işlemi tamamlandı.";
    }

    public function delete(Request $request){

        Post::query()->find($request->id)->delete();

        return "Silme işlemi tamamlandı.";
    }
}
