<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function index()
    {
        $data=Home::all();
        return view("admin.house.index",['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Category::all();
        return view("admin.house.create",['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Home();
        $data->categoryid=$request->categoryid;
        $data->userid=0;//$request->parent_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->location = $request->location;
        $data->heating = $request->heating;
        $data->room_number = $request->room_number;
        $data->price = $request->price;
        $data->size = $request->size;
        $data->bath_number = $request->bath_number;
        $data->balcony_number = $request->balcony_number;
        $data->floor = $request->floor;
        $data->building_age = $request->building_age;
        $data->dues = $request->dues;
        $data->status = $request->status;

        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }

        $data->save();

        return redirect("/admin/house");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home,$id)
    {
        $data=Home::find($id);
        return view("admin.house.show",['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home,$id)
    {
        $data=Home::find($id);
        $datalist=Category::all();
        $dataCategory=Category::find($data->categoryid);

        return view("admin.house.edit",['data' => $data ,'datalist'=>$datalist , 'dataCategory'=>$dataCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home,$id)
    {
        $data=Home::find($id);
        $data->categoryid=$request->categoryid;
        $data->userid=0;//$request->parent_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->location = $request->location;
        $data->heating = $request->heating;
        $data->room_number = $request->room_number;
        $data->price = $request->price;
        $data->size = $request->size;
        $data->bath_number = $request->bath_number;
        $data->balcony_number = $request->balcony_number;
        $data->floor = $request->floor;
        $data->building_age = $request->building_age;
        $data->dues = $request->dues;
        $data->status = $request->status;

        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->update();

        return redirect("/admin/house");
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home,$id)
    {
        $data=Home::find($id);
        if (Storage::exists($data->image)){
            Storage::delete($data->image);
        }

        $data->delete();
        return redirect("/admin/house");
    }
}
