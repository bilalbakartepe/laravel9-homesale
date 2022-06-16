<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\Comment;
use App\Models\Setting;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options="general";
        $setting= Setting::first();
        
        return view('home.user.index',[
            'options'=>$options,
            'setting'=>$setting]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function reviews()
    {
        $id=Auth::user();
        $id=$id->id;
        $comments=DB::table('comments')->where('user_id',$id)->get();
        $options="reviews";
        $setting=Setting::first();

        return view('home.user.index',[
            'options'=>$options,
            'comments'=>$comments,
            'setting'=>$setting]);
        
    }

    public function reviewsedit($id)
    {
        $comment=Comment::find($id);
        $options="reviewsedit";
        $setting=Setting::first();

        return view('home.user.index',[
            'options'=>$options,
            'comment'=>$comment,
            'setting'=>$setting]);
        
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
        //
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
