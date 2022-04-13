@extends('layouts.adminbase')

@section('tittle', "Edit Category: ".$data->title)


@section('content')
<div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit Category:  {{$data->title}}
            </h1>
              <ol class="breadcrumb float-sm-right">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a>Add Category</a></li>
              </ol>
            
          </section>
          <br>
          <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Edit & Update</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/admin/category/update/{{$data->id}}" method="post">
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" value="{{$data->title}}" name="title" >
                    </div>
                    <div class="form-group">
                      <label for="keywords">Keywords</label>
                      <input type="text" class="form-control" id="keywords" value="{{$data->keywords}}" name="keywords">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" id="description" value="{{$data->description}}" name="description">
                    </div>

                    
                    <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="image">
                      
                    </div>


                    <div class="checkbox">
                      <label>Status</label>
                      <select class="form-control" name="status">
                          <option selected>{{$data->status}}</option>
                          <option>true</option>
                          <option>false</option>
                        </select>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
            </div>
@endsection