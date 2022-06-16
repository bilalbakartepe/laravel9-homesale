@extends('layouts.adminbase')

@section('title', "Agent Admin Panel Category Create")

@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))
@section('content')

@section('content')
<div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Add Category
              <small>it all starts here</small>
            </h1>
              <ol class="breadcrumb float-sm-right">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a>Add Category</a></li>
              </ol>
            
          </section>
          <br>
          <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/admin/category/store" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label >Parent Category</label>
                      <select name="parent_id" class="form-control">
                        <option value="0" selected="selected">Main Category</option>
                        @foreach($data as $rs)
                          <option value="{{$rs->id}}">{{\app\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option> 
                        @endforeach
                      </select>
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                      <label for="keywords">Keywords</label>
                      <input type="text" class="form-control" id="keywords" name="keywords">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" id="description" name="description">
                    </div>

                    
                    <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="image">
                      
                    </div>


                    <div class="checkbox">
                      <label>Status</label>
                      <select class="form-control" name="status">
                          <option>true</option>
                          <option>false</option>
                        </select>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </form>
            </div>
@endsection