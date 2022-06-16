@extends('layouts.adminbase')

@section('title', "Agent Admin Panel House Create")


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
                  <h3 class="box-title">Let's Create</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/admin/house/store" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label >Parent Category</label>
                      <!-- <select name="parent_id" class="form-control">
                        <option value="0" selected="selected">Main Category</option>
                        @foreach($data as $rs)
                          <option value="{{$rs->id}}"><?php \app\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)?></option> 
                        @endforeach
                      </select> -->
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
                      <label for="detail">Detail</label>
                      <input type="text" class="form-control" id="detail" name="detail">
                    </div>

                    
                    <div class="form-group">
                      <label for="location">Location</label>
                      <input type="text" class="form-control" id="location" name="location">
                    </div>

                    
                    <div class="form-group">
                      <label for="heating">Heating</label>
                      <input type="text" class="form-control" id="heating" name="heating">
                    </div>

                    <div class="form-group">
                      <label for="room_number">Room Number</label>
                      <input type="text" class="form-control" id="room_number" name="room_number">
                    </div>

                    <div class="form-group">
                      <label for="price">Price</label>
                      <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <div class="form-group">
                      <label for="size">Size</label>
                      <input type="text" class="form-control" id="size" name="size">
                    </div>
                    <div class="form-group">
                      <label for="bath_number">Bath Number</label>
                      <input type="text" class="form-control" id="bath_number" name="bath_number">
                    </div>
                    <div class="form-group">
                      <label for="balcony_number">Balcony Number</label>
                      <input type="text" class="form-control" id="balcony_number" name="balcony_number">
                    </div>
                    <div class="form-group">
                      <label for="floor">Which Floor</label>
                      <input type="text" class="form-control" id="floor" name="floor">
                    </div>
                    <div class="form-group">
                      <label for="buildin_age">Building Age</label>
                      <input type="text" class="form-control" id="buildin_age" name="buildin_age">
                    </div>
                    <div class="form-group">
                      <label for="dues">Dues</label>
                      <input type="text" class="form-control" id="dues" name="dues">
                    </div>
                    <div class="form-group">
                      <label for="userid">UserId</label>
                      <input type="text" class="form-control" id="userid" name="userid">
                    </div>


                    
                    <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="image">
                      
                    </div>


                    <div class="checkbox">
                      <label>Status</label>
                      <select class="form-control" name="status">
                          <option>Not Approved</option>
                          <option>Approved</option>
                          <option>On Sale</option>
                          <option>Sold</option>
                        </select>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
              </form>
            </div>
@endsection