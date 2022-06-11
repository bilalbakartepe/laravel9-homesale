<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\RoleUser;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages=DB::table('messages')->where('status','New')->get();
        $comments=DB::table('comments')->where('status','New')->get();

        $data=User::all();
        return view("admin.user.index",[
            'data'=>$data,
            'messages'=>$messages,
            'comments'=>$comments]);
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
        $data=User::find($id);
        $roles=Role::all();
        return view("admin.user.show",[
            'data'=>$data,
            'roles'=>$roles
        ]);
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
    
     public function addrole(Request $request, $id)
    {
        $role=new RoleUser();
        $role->role_id=$request->roleid;
        $role->user_id=$id;

        $role->save();

        return redirect("/admin/user/show/$id");

    }

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
        $data=User::find($id);
        $data->delete();
        return redirect('/admin/user');
    }


    public function removerole(Request $request,$id)
    {   
        $user=User::find($id);
        $user->roles()->detach($request->roleid);
        
        return redirect("/admin/user/show/$id");
    
    }
    

}
