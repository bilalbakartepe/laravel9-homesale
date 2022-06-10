@extends('layouts.adminbase')

@section('title', "FAQ")


@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            FAQs
            <small>You can see all houses right below</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-fw fa-home"></i> Home</a></li>
            <li><a >FAQs</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div>
            <div class="row">
              <div class="col-sm-3">
                <a href="/admin/faq/create" class="btn btn-block btn-primary btn-lg">
                  Add FAQ
                </a>
              </div>

            </div>
          </div>
        <br>



        <!-- Default box -->
          <div class="box">
                <div class="box-header">
                  <h3 class="box-title">FAQ List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Question</th>
                      <th>Answer</th>
                      <th>Status</th>
                    </tr>
                  @foreach($data as $rs)
                    <tr>
                      <td>{{$rs->id}}</td>

                      <td>{{$rs->question}}</td>
                      <td>{!! $rs->answer !!}</td>
                      <td>($rs->status)</td>
                      <td>
                        <a href="/admin/faq/edit/{{$rs->id}}" >
                        <i class="fa fa-fw fa-edit"></i> Edit</a></td>
                      <td>
                      <a href="/admin/faq/destroy/{{$rs->id}}" onclick="return confirm('Are you sure for deleting ?')">
                        <i class="fa fa-fw fa-ban"></i>Delete</a>

                      <td>
                      <a href="/admin/faq/show/{{$rs->id}}">
                        <i class="fa fa-fw fa-bars"></i> Show</a></td>
                    </tr>
                  @endforeach
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>

        </section><!-- /.content -->
@endsection
