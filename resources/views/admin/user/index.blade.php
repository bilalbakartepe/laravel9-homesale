@extends('layouts.adminbase')

@section('title', "Users")


@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Users
            <small>You can see all users right below</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-fw fa-home"></i> Home</a></li>
            <li><a >Users</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

        <!-- Default box -->
          <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Users List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Name</th>
                      <th>E-mail</th>
                      <th>Role</th>

                    </tr>
                  @foreach($data as $rs)
                    <tr>
                      <td>{{$rs->id}}</td>
                      <td>{{$rs->name}}</td>
                      <td>{{$rs->email}}</td>
                      <td>
                         
                          @foreach($rs->roles as $role)
                            {{$role->name}}
                          @endforeach
                        
                      </td>    
                      
                      <td>
                        <a href="/admin/user/destroy/{{$rs->id}}" onclick="return confirm('Are you sure for deleting ?')">
                          <i class="fa fa-fw fa-ban"></i>Delete
                        </a>
                      </td>
                      <td>
                      <a href="/admin/user/show/{{$rs->id}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                        <i class="fa fa-fw fa-bars"></i> Show</a></td>
                    </tr>
                  @endforeach
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>

        </section><!-- /.content -->
@endsection
