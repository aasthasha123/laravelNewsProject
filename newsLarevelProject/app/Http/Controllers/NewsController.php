<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        $max_body = News::find(1);
        $secondary = News::find(2);
        $third = News::find(3);
        return view('news.index',compact('news','max_body','secondary','third'));

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function entertainment()
    {

        $news = News::where('category','=','Entertainment')->get();
        return view('news.entertainment',compact('news'));


    }



       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sports()
    {

        $news = News::where('category','=','Sports')->get();
        return view('news.sports',compact('news'));


    }



       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function world()
    {

        $news = News::where('category','=','World')->get();
        return view('news.world',compact('news'));


    }



       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function india()
    {

        $news = News::where('category','=','India')->get();
        return view('news.india',compact('news'));


    }

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('news.single',compact('news'));
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
