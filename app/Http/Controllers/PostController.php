<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //منجيب معلومات من الجدول ونخزنه بمتغير 
        // Post name model 
        $posts=Post::all();
        
        //  منجيب معلومات من الجدول ونخزنه بمتغير ومنعمل اعادة عرض الصفحة
         // المتغير مع معلومات 
        return view('posts.index')->with("posts" , $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
               

             $post = new Post;
            if ($request->hasFile('image'))           
               $image = $request->file('image');
             $imagename = time() . '.' . $image->getClientOriginalExtension();
              $image->move(public_path('images'), $imagename);
    
              Post::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'image' => $imagename,
                ]);
                    return redirect()->route('posts.index')->with('success', 'Post created successfully.');
         }

       


    

    /**
     * Display the specified resource.
     */
    public function show(post $post )
    {

        return view("posts.show")->with("post",$post);
    }

    /**
     * Show the form for editing the specified resource.
     */  
    public function edit(Post $post)
    {

      return view("posts.edit")->with("post",$post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Post $post)
    {
        
        return view("posts.index")->with("post",$post);
    }

  
    public function destroy(Post $post)
    {
        $post->delete();

       
        $post->delete();  // حذف البوست

        return redirect()->route('/')->with('success', 'Post deleted successfully');
         }
        }















  /**
     * $post=new Post();
      *  if ($request->hasFile("image")){
       * $image = $request["image"];
        *$imagename=time() . '.' .$image->getClientOriginalExtension();
        *$image->move(public_path('$image'),$imagename);
        *$post->create(
         *   [
          *      "title"=>$request["title"],
           *     "description"=>$request["description"],
            *    "image"=>$imagename
            *]);
             * return redirect()->route("/")->with("sucsses" , "added post"); 

     * 
     * Remove the specified resource from storage.
     */