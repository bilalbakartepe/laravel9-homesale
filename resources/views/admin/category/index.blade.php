@extends('layouts.adminbase')

@section('tittle', "Agent Admin Panel Category")


@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Blank page
            <small>it all starts here</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Bordered Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                      <th>Keywords</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                  @foreach($data as $rs)
                    <tr>
                      <td>$rs->id</td>
                      <td>$rs->title</td>
                      <td>$rs->keywords</td>
                      <td>$rs->description</td>
                      <td>$rs->image</td>
                      <td>$rs->status</td>
                      <td><a href="/admin/category/edit">Edit</a></td>
                      <td><a href="/admin/category/delete">Delete</a></td>
                      <td><a href="/admin/category/Show">Show</a></td>
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