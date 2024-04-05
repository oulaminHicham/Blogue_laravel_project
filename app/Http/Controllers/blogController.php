<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class BlogController extends Controller
{
    //index action
    public function index(){
        $postFromDb = Post::all(); // collection objects
        return view('Posts.index' ,['postes'=>$postFromDb]);
    }
    // show action
    public function show($postId)
    {
        // $postFromDb = Post::find($postId); // return model object
        $postFromDb = Post::findOrFail($postId); // if there is now match id return exception
        // $postFromDb = Post::where('id',$postId)->first(); // model object
        // $postFromDb = Post::where('id',$postId)->get(); // return collection object
        // $postFromDb = Post::where('title','react')->first();
        // if(is_null($postFromDb)) return to_route('posts.index') ; // one of solution if we have id not in our datbase
        return view('Posts.show' , ['post'=>$postFromDb , 'postId'=>$postId]);
    }
    // create action
    public function create(){
        $users = User::all();
        return view('Posts.create' , ['users'=>$users]);
    }
    // store action  
    public function store(Request $request){
        // validation logique
        request()->validate([
            'title'=>['required' , 'min:3'],
            'dex'=>['required' , 'min:10'],
            'creator'=>['required' ,'exists:users,id']
        ]);
        Post::create([  
            'title'=>$request ->title ,
            'descreption'=>$request ->dex ,
            'user_id'=>$request ->creator ,
        ]);
        return to_route(route:'posts.index') ;
    }
    // edit action
    public function edit($id){
        $users = User::all();
        $post=Post::find($id);
        return view('Posts.edit' , ['postId'=>$id ,'post'=>$post , 'users'=>$users]);
    }
    // update action
    public function update(Request $request , $id){
        // validation logique
        request()->validate([
            'title'=>['required' , 'min:3'],
            'dex'=>['required' , 'min:10'],
            'creator'=>['required' ,'exists:users,id']
        ]);
        // update data
        Post::where('id',$id)->update([
            'title'=>$request ->title ,
            'descreption'=>$request ->dex ,
            'user_id'=>$request ->creator ,
        ]);
        return to_route('posts.show' , $id);
    }
    // destroy action
    public function destroy($id){
        // Post::destroy($id);
        $postTodelete=Post::find($id);
        $postTodelete ->delete();
        return to_route('posts.index');
    }
}
