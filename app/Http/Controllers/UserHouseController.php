<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Home;
use Illuminate\Support\Facades\Storage;
class UserHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user();
        $id=$id->id;
        $adverts=DB::table('homes')->where('userid',$id)->get();
        $options="adverts";
        return view('home.user.index',[
            'options'=>$options,
            'adverts'=>$adverts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $options="advertscreate";
        return view("home.user.index",[
            'categories'=>$categories,
            'options'=>$options
        ]);
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
        $data->categoryid=$request->category_id;
        $data->userid=Auth::user()->id;
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

        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }

        $data->save();

        return redirect("/userpanel/adverts");
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
        $house=Home::find($id);
        $datalist=Category::all();
        $dataCategory=Category::find($house->categoryid);
        $options="advertsedit";
        return view("home.user.index",[
            'house' => $house ,
            'datalist'=>$datalist ,
            'dataCategory'=>$dataCategory,
            'options'=>$options
        ]);
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
        $data=Home::find($id);
        $data->categoryid=$request->categoryid;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->location = $request->location;
        $data->heating = $request->heating;
        $data->room_number = $request->room_number;
        $data->update_price = $request->updated_price;
        $data->size = $request->size;
        $data->bath_number = $request->bath_number;
        $data->balcony_number = $request->balcony_number;
        $data->floor = $request->floor;
        $data->building_age = $request->building_age;
        $data->dues = $request->dues;

        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->update();

        return redirect("/userpanel/adverts");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Home::find($id);
        if (Storage::exists($data->image)){
            Storage::delete($data->image);
        }

        $data->delete();
        return redirect("/userpanel/adverts");
    }
}
