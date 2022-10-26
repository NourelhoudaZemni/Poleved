<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Models\Comments;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function OurPosts()
    {
        $data = Posts::all();

        return view('OurPosts', compact('data'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = Posts::latest()->paginate(5);
        return view('posts.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
//        $sponsor = Sponsor::all();
//        return view('posts.create',compact('sponsor'));
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $posts = new Posts;
        $posts->title = $request->title;
        $posts->date = $request->date;
        $posts->contenu = $request->contenu;
        $posts->description = $request->description;
        $posts->author = $request->author;
        $posts->save();
        return redirect()->route('posts.index')->with('success', 'Posts created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        return view('posts.show', ['posts' => Posts::findOrFail($id), 'comments' => Posts::findOrFail($id)->hasMany(Comments::class, 'post_id', 'id')->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        return view('posts.edit', ['posts' => Posts::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $posts = Posts::find($id);
        $posts->title = $request->title;
        $posts->date = $request->date;
        $posts->contenu = $request->contenu;
        $posts->description = $request->description;
        $posts->author = $request->author;
        $posts->save();
        return redirect()->route('posts.index')->with('success', 'Posts updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $posts = Posts::findOrFail($id);
        $posts->delete();
        return redirect()->route('posts.index')->with('success', 'Posts deleted successfully.');
    }
}
