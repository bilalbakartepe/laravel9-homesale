@extends('layouts.adminwindow')

@section('title', "Show Message: ".$data->subject)


@section('content')
  <br>
          <div>
            <div class="row">
              <div class="col-sm-2">
                <a href="/admin/message/destroy/{{$data->id}}" class="btn btn-block btn-danger btn-lg">
                  Delete
                </a>
              </div>
            </div>
          </div>
          <br>

          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Show Message:  {{$data->subject}}
            </h1>
              <ol class="breadcrumb float-sm-right">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a>Show Message</a></li>
              </ol>

          </section>
          <br>
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                  <tbody>
                    <tr>
                      <th>Details The House</th>
                    </tr>
                    <tr><td>ID              </td><td>{{$data->id}}</td></tr>
                    <tr><td>Name           </td><td>{{$data->name}}</td></tr>
                    <tr><td>E-mail           </td><td>{{$data->email}}</td></tr>
                    <tr><td>Roles           </td>
                      <td>
                        @foreach($data->roles as $role)
                          {{$role->name}}
                        @endforeach
                      </td>
                    </tr>

                    <tr><td>Add Role to User       </td>
                      <td>
                        <form action="/admin/user/addrole/{{$data->id}}" method="post" enctype="multipart/form-data">
                        @csrf

                          <select name="roleid" id="roleid">
                            @foreach($roles as $role)
                              <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                            
                          </select>
                          
                          <button type="submit">Update</button>
                        </form>
                      </td>
                    </tr>

                    <tr><td>Remove Role from User       </td>
                      <td>
                        <form action="/admin/user/removerole/{{$data->id}}" method="post" enctype="multipart/form-data">
                        @csrf

                          <select name="roleid" id="roleid">
                            @foreach($data->roles as $role)
                              <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                            
                          </select>
                          
                          <button type="submit">Remove</button>
                        </form>
                      </td>
                    </tr>


                  </tbody>
                </table>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div>
        </div>
@endsection
