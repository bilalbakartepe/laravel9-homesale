<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Setting;
class HomeController extends Controller
{
    public function index(){
        return view("admin.index");
    }

    public function setting(){

        $data=Setting::first();
        
        if($data==null){

            $data=new Setting();
            $data->title='Project Title';
            $data->save();

            $data=Setting::first();
            
        }

        return view("admin.setting",['data'=>$data]);
    }
}
