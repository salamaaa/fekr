<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        if($categories->count() == 0 || $tags->count() == 0){
            return redirect()->back()->with('toast_info',"You don't have any categories or Tags");
        }

        return view('admin.posts.create',['categories'=>$categories,'tags'=>$tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;

        $this->validate($request,[
            'title'=>['required','max:100','string'],
            'post_content'=>['required','max:255'],
            'featured'=>['required','image'],
            'category_id'=>['required'],
            'tags'=>['required']
        ]);

        $featured = $request->featured;
        $new_featured = time().$featured->getClientOriginalName();
        $featured->move('uploads/posts/',$new_featured);


        $post->title = $request->title;
        $post->content = $request->post_content;
        $post->category_id = $request->category_id;
        $post->featured = 'uploads/posts/'.$new_featured;
        $post->slug = Str::slug($request->title,'-');
        $post->save();

        $post->tags()->attach($request->tags);

        return redirect()->route('posts.index')->with('toast_success','Post Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.edit',
            ['post'=>$post,'categories'=>$categories,'tags'=>$tags]);
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
        $this->validate($request,[
            'title'=>['required','max:100','string'],
            'post_content'=>['required','max:255'],
            'featured'=>['required','image'],
            'category_id'=>['required']
        ]);

        $post = Post::findOrFail($id);

        $featured1 = $request->featured;
        $new_featured = time().$featured1->getClientOriginalName();
        $featured1->move('uploads/posts/',$new_featured);


        $post->title = $request->title;
        $post->content = $request->post_content;
        $post->category_id = $request->category_id;
        $post->featured = 'uploads/posts/'.$new_featured;
        $post->slug = Str::slug($request->title,'-');
        $post->save();

        $post->tags()->sync($request->tags);
        return redirect()->route('posts.index')->with('toast_success','Post Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('posts.index')->with('toast_success','Post just trashed!');
    }

    public function trashed(){
        $posts = Post::onlyTrashed()->get();
        return view('admin.posts.trashed',['posts'=>$posts]);
    }

    public function restore($id){
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->restore();
        return redirect()->route('posts.index')->with('toast_success','Post successfully restored!');
    }

    public function perDelete($id){
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->forceDelete();
        return redirect()->route('posts.trashed')->with('toast_success','Post permanently deleted');
    }

}
