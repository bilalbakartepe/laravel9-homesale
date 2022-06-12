<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Setting;
use App\Models\Message;
use App\Models\Comment;
class HomeController extends Controller
{
    public function index(){

        $messages=DB::table('messages')->where('status','New')->get();
        $comments=DB::table('comments')->where('status','New')->get();
        return view("admin.index",
        ['messages'=>$messages,
        'comments'=>$comments]);
    }

    public function setting(){

        $data=Setting::first();
        
        if($data==null){

            $data=new Setting();
            $data->title='Project Title';
            $data->save();

            $data=Setting::first();
            
        }

        $messages=DB::table('messages')->where('status','New')->get();
        $comments=DB::table('comments')->where('status','New')->get();

        return view("admin.setting",[
            'data'=>$data,
            'messages'=>$messages,
            'comments'=>$comments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request){
        $id=$request ->input('id');
        $data = Setting::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description= $request->input('description');
        $data->company = $request->input('company');
        $data-> address= $request->input('address');
        $data-> phone= $request->input('phone');
        $data-> fax= $request->input('fax');
        $data->email= $request->input('email');
        $data-> smtpserver= $request->input('smtpserver');
        $data-> smtpemail= $request->input('smtpemail');
        $data-> smtppassword= $request->input('smtppassword');
        $data-> smtpport= $request->input('smtpport');
        $data->facebook= $request->input('facebook');
        $data->instagram= $request->input('instagram');
        $data->twitter= $request->input('twitter');
        $data->youtube= $request->input('youtube');
        $data->aboutus= $request->input('aboutus');
        $data->contact= $request->input('contact');
        $data->references= $request->input('references');
        $data->status = $request->input('status');
        $data->save();

        return redirect("/admin/setting");
    }
}
