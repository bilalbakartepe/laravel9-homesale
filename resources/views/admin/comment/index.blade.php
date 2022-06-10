@extends('layouts.adminbase')

@section('tittle', "Admin Comment Control")


@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Comment
            <small>You can see all Comment right below</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-fw fa-home"></i> Home</a></li>
            <li><a >Comment</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

        <!-- Default box -->
          <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Comment List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Comment</th>
                      <th>Rate</th>
                      <th>Advert</th>
                      <th>Username</th>
                      <th>Status</th>
                    </tr>
                  @foreach($data as $rs)
                    <tr>
                      <td>{{$rs->id}}</td>

                      <td>{{$rs->comment}}</td>
                      <td>{{$rs->rate}}</td>
                      <td><a href="/house/{{$rs->home_id}}">{{\app\Http\Controllers\AdminPanel\CommentConroller::getHomeTitle($rs->home_id)}}</a> </td>
                      <td>{{\app\Http\Controllers\AdminPanel\CommentConroller::getUserName($rs->user_id)}}</td>
                      <td>{{$rs->status}}</td>    
                      
                      <td>
                        <a href="/admin/comment/destroy/{{$rs->id}}" onclick="return confirm('Are you sure for deleting ?')">
                          <i class="fa fa-fw fa-ban"></i>Delete
                        </a>
                      </td>
                      <td>
                      <a href="/admin/comment/show/{{$rs->id}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                        <i class="fa fa-fw fa-bars"></i> Show</a></td>
                    </tr>
                  @endforeach
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>

        </section><!-- /.content -->
@endsection
