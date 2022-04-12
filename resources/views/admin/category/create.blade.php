@extends('layouts.adminbase')

@section('tittle', "Agent Admin Panel Category Create")


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
                <form role="form" action="/admin/category/store" method="post">
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                      <label for="keywords">Keywords</label>
                      <input type="text" class="form-control" id="keywords" name="keywords">
                    </div>
                    <div class="form-group">
                      <label for="descripton">Descripton</label>
                      <input type="text" class="form-control" id="descripton" name="descripton">
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
            </div>
@endsection