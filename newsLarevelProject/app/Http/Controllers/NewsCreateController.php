<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\News;
use App\Category;
use Image;

class NewsCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $news = News::all();
        return view('admin.index',compact('news'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = News::all();
        $category = Category::pluck('title','id');
        return view('admin.create',compact('news','category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'title' => 'required|max:255',
            'body' => 'required',
            'category' => 'required',

        ));
        $news = new News;
        $news->title = $request->title;
        $news->body = $request->body;
        $catId = $request->category;
        $news->category  = Category::find($request->category)->title;   
        $news->save();
        return redirect()->route('admin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        return view('admin.show',compact('news'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $category = Category::pluck('title','id');

        return view('admin.edit',compact('news','category'));

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

        $news = News::find($id);
        $this->validate($request,array(
            'title' => 'required|max:225',
            'body' => 'required',
            'category' => 'required',
        ));

        $news = News::find($id);

        $news->title = $request->title;
        $news->body = $request->body;
        $catId = $request->category;
        $news->category  = Category::find($request->category)->title;   
        $news->save();
        $news->save();
        
        return redirect()->route('admin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('admin');
        
    }
}
