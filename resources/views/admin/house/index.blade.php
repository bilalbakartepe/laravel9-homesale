@extends('layouts.adminbase')

@section('title', "Agent Admin Panel House")
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Houses
            <small>You can see all houses right below</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-fw fa-home"></i> Home</a></li>
            <li><a href="#">Houses</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div>
            <div class="row">
              <div class="col-sm-3">
                <a href="/admin/house/create" class="btn btn-block btn-primary btn-lg">
                  Add House
                </a>
              </div>

            </div>
          </div>
        <br>



        <!-- Default box -->
          <div class="box">
                <div class="box-header">
                  <h3 class="box-title">House List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Category</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Image Gallery</th>
                      <th>Size</th>
                      <th>Price</th>
                      <th>Location</th>
                      <th>Status</th>
                    </tr>
                  @foreach($data as $rs)
                    <tr>
                      <td>{{$rs->id}}</td>

                      <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTreeSecond($rs->categoryid)}}</td>
                      <td>{{$rs->title}}</td>
                      <td>@if($rs->image)
                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                          @endif

                      </td>
                      <td>
                          <a href="/userpanel/image/{{$rs->id}}"
                            onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                            <img src="{{asset('assets')}}/Admin/img/imgGallery.png" > 
                          </a>
                          
                          
                      </td>
                      <td>{{$rs->size}}</td>
                      <td>{{$rs->price}}</td>
                      <td>{{$rs->location}}</td>
                      <td>{{$rs->status}}</td>
                      <td>
                        
                      </td>
                      <td>
                        <a href="/admin/house/edit/{{$rs->id}}" >
                        <i class="fa fa-fw fa-edit"></i> Edit</a></td>
                      <td>
                      <a href="/admin/house/destroy/{{$rs->id}}" onclick="return confirm('Are you sure for deleting ?')">
                        <i class="fa fa-fw fa-ban"></i>Delete</a>

                      <td>
                      <a href="/admin/house/show/{{$rs->id}}">
                        <i class="fa fa-fw fa-bars"></i> Show</a></td>
                    </tr>
                  @endforeach
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>

        </section><!-- /.content -->
@endsection
