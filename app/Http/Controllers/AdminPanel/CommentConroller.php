<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use App\Models\Home;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;

class CommentConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Comment::all();
        $messages=DB::table('messages')->where('status','New')->get();
        $comments=DB::table('comments')->where('status','New')->get();     
        $setting=Setting::first();

        return view("admin.comment.index",[
            'data'=>$data,
            'messages'=>$messages,
            'comments'=>$comments,
            'setting'=>$setting]);
    }

    public static function getUserName($id){
        $data=User::find($id);
        $data=$data->name;
        return $data;
    }

    public static function getHomeTitle($id){
        $data=Home::find($id);
        $data=$data->title;
        return $data;
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
        $data=Comment::find($id);

        $messages=DB::table('messages')->where('status','New')->get();
        $comments=DB::table('comments')->where('status','New')->get();     

        return view("admin.comment.show",[
            'data'=>$data,
            'messages'=>$messages,
            'comments'=>$comments]);
        
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
        $data=Comment::find($id);
        $data->status=$request->status;
        $data->save();
        return redirect("/admin/comment/show/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Comment::find($id);
        $data->delete();
        return redirect('/admin/comment');
    }
}
