@extends('layouts.adminbase')

@section('tittle', "Agent Admin Panel Category")


@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Categories
            <small>You can see all categories right below</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-fw fa-home"></i> Home</a></li>
            <li><a href="#">Categories</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div>
            <div class="row">
              <div class="col-sm-3">
                <a href="/admin/category/create" class="btn btn-block btn-primary btn-lg">
                  Add Category
                </a>
              </div>

            </div>
          </div>
        <br>

          
        
        <!-- Default box -->
          <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Category List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                      <th>Keywords</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Status</th>
                    </tr>
                  @foreach($data as $rs)
                    <tr>
                      <td>{{$rs->id}}</td>
                      <td>{{$rs->title}}</td>
                      <td>{{$rs->keywords}}</td>
                      <td>{{$rs->description}}</td>
                      <td>{{$rs->image}}</td>
                      <td>{{$rs->status}}</td>
                      <td>                    
                        <a href="/admin/category/edit/{{$rs->id}}" >
                        <i class="fa fa-fw fa-edit"></i> Edit</a></td>
                      <td>
                      <a href="/admin/category/delete/{{$rs->id}}">
                        <i class="fa fa-fw fa-ban"></i>Delete</div>
                        
                      <td>
                      <a href="/admin/category/show/{{$rs->id}}">
                        <i class="fa fa-fw fa-bars"></i> Show</a></td>
                    </tr>
                  @endforeach
                  </tbody></table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
                </div>
              </div>

        </section><!-- /.content -->
@endsection
