<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected $appends=[
            'getParentsTree'
     ];

     public static function getParentsTree($category,$title)
     {
         if($category->parentid==0)
         {
             return $title;
         }
        $parent=Category::find($category->parentid);
        $title=$parent->title. ' > '.$title;
        return CategoryController::getParentsTree($parent,$title);
     }

     public static function getParentsTreeSecond($id)
     {
         $category=Category::find($id);
         $title=$category->title;
         if($category->parentid==0)
         {
             return $title;
         }
        $parent=Category::find($category->parentid);
        $title=$parent->title. ' > '.$title;
        return CategoryController::getParentsTree($parent,$title);
     }

     public function index()
    {
        $data=Category::all();
        $messages=DB::table('messages')->where('status','New')->get();
        $comments=DB::table('comments')->where('status','New')->get();

        $setting=Setting::first();
        
        return view("admin.category.index",[
            'data'=>$data,
            'messages'=>$messages,
            'comments'=>$comments,
            'setting'=>$setting]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Category::all();
        $setting=Setting::first();
        
        $messages=DB::table('messages')->where('status','New')->get();
        $comments=DB::table('comments')->where('status','New')->get();

        return view("admin.category.create",[
            'data'=>$data,
            'messages'=>$messages,
            'comments'=>$comments,
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
        $data=new Category();
        $data->parentid=$request->parent_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();

        return redirect("/admin/category");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category,$id)
    {
        $data=Category::find($id);
        $messages=DB::table('messages')->where('status','New')->get();
        $comments=DB::table('comments')->where('status','New')->get();

        $setting=Setting::first();
        

        return view("admin.category.show",[
            'data'=>$data,
            'messages'=>$messages,
            'comments'=>$comments,
            'setting'=>$setting]);        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
        $data=Category::find($id);
        $datalist=Category::all();
        $messages=DB::table('messages')->where('status','New')->get();
        $comments=DB::table('comments')->where('status','New')->get();

        $setting=Setting::first();
        

        return view("admin.category.edit",[
            'data' => $data ,
            'datalist'=>$datalist,
            'messages'=>$messages,
            'comments'=>$comments,
            'setting'=>$setting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id)
    {
        $data=Category::find($id);
        $data->parentid=$request->parent_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->update();

        return redirect("/admin/category");
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        $data=Category::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        
        $data->delete();
        return redirect("/admin/category");
    }
}
