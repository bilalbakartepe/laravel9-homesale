@extends('layouts.adminbase')

@section('tittle', "Show Category: ".$data->title)


@section('content')
<div class="content-wrapper">
  <br>
          <div>
            <div class="row">
              <div class="col-sm-2">
                <a href="/admin/category/edit/{{$data->id}}" class="btn btn-block btn-primary btn-lg">
                  Edit
                </a>
              </div>

              <div class="col-sm-1">
              </div>


              <div class="col-sm-2">
                <a href="/admin/category/delete/{{$data->id}}" class="btn btn-block btn-danger btn-lg">
                  Delete
                </a>
              </div>

            </div>
          </div>
          <br>
      
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Show Category:  {{$data->title}}
            </h1>
              <ol class="breadcrumb float-sm-right">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a>Show Category</a></li>
              </ol>
            
          </section>
          <br>
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Responsive Hover Table</h3>
                  <div class="box-tools">
                    <div class="input-group">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Keywords</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Created Date</th>
                      <th>Updated Date</th>
                    </tr>
                    <tr>
                      <td>{{$data->id}}</td>
                      <td>{{$data->title}}</td>
                      <td>{{$data->keywords}}</td>
                      <td>{{$data->description}}</td>
                      <td>{{$data->image}}</td>
                      <td>{{$data->status}}</td>
                      <td>{{$data->expire_at}}</td>
                      <td>{{$data->update_at}}</td>
                    </tr>
                  
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
@endsection