<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::orderBy('created_at', 'desc')->paginate(6);
        // $posts = Post::orderBy('created_at','desc')
        //           ->take(8)
        //           ->get();


        return view('pages.home')
                ->with('categories',$categories)
                ->with('posts', $posts);


    }

    public function getFivePost()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('pages.pageCreatePost')
              ->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request -> validate([
          'author' => 'required',
          'text'=> 'required',
          'category_id'=> 'required'
        ]);
        // dd($validatedData);
        $newPost = Post::create($validatedData);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);

        // dd($category);
        return view('pages.showPage', compact('category'));
    }

    public function showSinglePost($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        // dd($post);
        return view('pages.singlePost')
                ->with('categories',$categories)
                ->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('pages.pageEditPost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validatedData = $request -> validate([
        'author' => 'required',
        'text'=> 'required'
      ]);
      // dd($validatedData);
      $newPost = Post::whereId($id)->update($validatedData);
      return redirect('/');
      // return  redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::findOrFail($id);
      $post -> delete();
      return redirect()->back();
    }
}
