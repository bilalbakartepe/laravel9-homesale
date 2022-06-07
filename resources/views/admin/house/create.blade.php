@extends('layouts.adminbase')

@section('tittle', "Agent Admin Panel House Create")


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
                      <label >Category</label>
                      <select name="category_id" class="form-control">

                        @foreach($data as $rs)
                          <option value="{{$rs->id}}">{{App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
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
                      <label for="detail">Detail</label>
                      <input type="text" class="form-control" id="detail" name="detail">
                    </div>


                    <div class="form-group">
                      <label for="location">Location</label>
                      <input type="text" class="form-control" id="location" name="location">
                    </div>


                    <div class="form-group">
                       <label for="heating">Heating</label>
                       <select class="form-control" id="heating" name="heating">
                           <option>Natural Gas</option>
                           <option>Central Heating</option>
                           <option>Floor Heating</option>
                           <option>No Heating</option>
                         </select>
                     </div>

                   <div class="form-group">
                       <label for="room_number">Room Number</label>
                       <select class="form-control" id="room_number" name="room_number">
                           <option>1+0</option>
                           <option>1+1</option>
                           <option>2+0</option>
                           <option>2+1</option>
                           <option>3+0</option>
                           <option>3+1</option>
                           <option>4+0</option>
                           <option>4+1</option>
                           <option>5+0</option>
                           <option>5+1</option>
                           <option>6+0</option>
                         </select>
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
                       <select class="form-control" id="bath_number" name="bath_number">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                           <option>8</option>
                           <option>9</option>
                           <option>10</option>
                         </select>
                    </div>

                    <div class="form-group">
                       <label for="balcony_number">Balcony Number</label>
                       <select class="form-control" id="balcony_number" name="balcony_number">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                           <option>8</option>
                           <option>9</option>
                           <option>10</option>
                         </select>
                    </div>

                    <div class="form-group">
                       <label for="floor">Floor</label>
                       <select class="form-control" id="floor" name="floor">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                           <option>8</option>
                           <option>9</option>
                           <option>10</option>
                         </select>
                    </div>

                    <div class="form-group">
                       <label for="buildin_age">Building Age</label>
                       <select class="form-control" id="buildin_age" name="buildin_age">
                           <option>0-5</option>
                           <option>5-10</option>
                           <option>10-15</option>
                           <option>15-20</option>
                           <option>20-25</option>
                           <option>25-30</option>
                           <option>30-35</option>
                           <option>35-40</option>
                           <option>40-45</option>
                           <option>45-50</option>
                         </select>
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
            </div>
@endsection
