<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class DashPosts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	$post = Posts::orderby('created_at', 'asc')->paginate(5);

    	return view('admin.pages.index')->withPost($post);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

		return view('admin.pages.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

	    $post = new Posts();

	    $post->title = $request->title;
	    $post->slug = $request->slug;
	    $post->content = $request->content;

	    $post->save();

	    $request->session()->flash('success', 'Запись опубликована!');

	    return redirect()->route('admin-panel.show', $post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

	    $post = Posts::find($id);

	    return view('admin.pages.show')->withPost($post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

	    $post = Posts::find($id);

	    return view('admin.pages.edit')->withPost($post);

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

	    $post = Posts::find($id);

	    $post->title = $request->title;
	    $post->slug = $request->slug;
	    $post->content = $request->content;

	    $post->save();

	    $request->session()->flash('success', 'Успешное редактирование!');

	    return redirect()->route('admin-panel.show', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

	    $post = Posts::find($id);

	    $post->delete();

	    return view('admin.pages.index');

    }
}
