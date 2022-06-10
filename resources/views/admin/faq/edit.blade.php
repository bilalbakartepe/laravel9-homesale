@extends('layouts.adminbase')

@section('tittle', "Edit FAQ: ".$data->question)


@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection


@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit FAQ:  {{$data->question}}
    </h1>
      <ol class="breadcrumb float-sm-right">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a>Edit House</a></li>
      </ol>

  </section>
  <br>
  <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Edit & Update</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/faq/update/{{$data->id}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="box-body">
            <div class="form-group">

              <label for="question">Question</label>
              <input type="text" class="form-control" id="question" name="question" value="{{$data->question}}">
            </div>

            <div class="form-group">
              <label for="answer">Answer</label>
              <textarea class="form-control" id="answer" name="answer">
                {{$data->answer}}
              </textarea>
              <script>
                ClassicEditor
                        .create( document.querySelector( '#answer' ) )
                        .then( editor => {
                                console.log( editor );
                        } )
                        .catch( error => {
                                console.error( error );
                        } );
              </script>

            <div class="form-group">
              <label for="status">Status</label>
              <select class="form-control" name="status" id="status">
                  <option selected>{{$data->status}}</option>
                  <option>Not Approved</option>
                  <option>Approved</option>
                  <option>On Sale</option>
                  <option>Sold</option>
                </select>
            </div>
          </div><!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
    </div>
  </div>
@endsection
