
@extends('layouts.adminwindow')

@section('title', "Admin Image Gallery")


@section('content')
        <!-- Content Header (Page header) -->          
        
<h2>{{$house->title}}</h2>

<form role="form" action="/admin/image/store/{{$house->id}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            
            <div class="form-group">
            <label>Image</label>
              <input type="file" name="imagepath"></input>
              <button type="submit" class="btn btn-primary">Upload</button>
            </div>
          </div>
      </form>


<!-- Default box -->
  <div class="box">
        <div class="box-header">
          <h3 class="box-title">House Image List</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">ID</th>
                
                <th>Title</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>

            </thead>
            <tbody>
            
          @foreach($images as $rs)
            <tr>
              <td>{{$rs->id}}</td>
              <td>{{$rs->title}}</td>

              <td>@if($rs->imagepath)
                    <img src="{{Storage::url($rs->imagepath)}}" style="height: 85px">
                  @endif
              
              </td>
              <td>
              <a href="/admin/image/destroy/{{$house->id}}/{{$rs->id}}" onclick="return confirm('Are you sure for deleting ?')">
                <i class="fa fa-fw fa-ban"></i>Delete</a>
                
          @endforeach
          </tbody></table>
        </div><!-- /.box-body -->
      </div>

</section><!-- /.content -->