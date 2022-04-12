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
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="title" placeholder="title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Keywords</label>
                      <input type="text" class="form-control" id="keywords" placeholder="keywords">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Descripton</label>
                      <input type="text" class="form-control" id="descripton" placeholder="descripton">
                    </div>

                    
                    <div class="form-group">
                      <label for="exampleInputFile">Image</label>
                      <input type="file" name="image">
                      
                    </div>


                    <div class="checkbox">
                      <label>Status</label>
                      <select class="form-control" name="selection">
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