@extends('layouts.adminbase')

@section('title', "FAQ Create")
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection

 
@section('content')
<div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Add FAQ
              <small>it all starts here</small>
            </h1>
              <ol class="breadcrumb float-sm-right">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a>Add FAQ</a></li>
              </ol>

          </section>
          <br>
          <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Let's Create</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/admin/faq/store" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label >Question</label>
                      <input type="text" class="form-control" id="question" name="question">
                    </div>
                  

                    <div class="form-group">
                      <label for="answer">Answer</label>
                      <textarea class="form-control" id="answer" name="answer">
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
                    </div>
                    <div class="checkbox">
                      <label>Status</label>
                      <select class="form-control" name="status">
                          <option>True</option>
                          <option>False</option>
                      </select>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
            </div>
@endsection
