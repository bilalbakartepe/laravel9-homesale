@extends('layouts.adminbase')
@if($setting!=null)
@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))
@endif
@section('content')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection

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
    <form role="form" action="/admin/setting/update" method="post" enctype="multipart/form-data">
     @csrf
      <div class="col-md-10">
        <!-- Custom Tabs (Pulled to the right) -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs pull-right">
            
            <li class=""><a href="#reference_tab" data-toggle="tab" aria-expanded="false">References</a></li>
            <li class=""><a href="#contact_tab" data-toggle="tab" aria-expanded="false">Contact Page</a></li>
            <li class=""><a href="#about_tab" data-toggle="tab" aria-expanded="false">About Us</a></li>
            <li class=""><a href="#social_tab" data-toggle="tab" aria-expanded="false">Social Media</a></li>
            <li class=""><a href="#smtp_tab" data-toggle="tab" aria-expanded="false">Smtp Email</a></li>
            <li class="active"><a href="#general_tab" data-toggle="tab" aria-expanded="true">General</a></li>

            <li class="pull-left header"><i class="fa fa-gear"></i> Settings</li>
          </ul>

          <div class="tab-content">
              <div class="tab-pane active" id="general_tab">   
                <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" value="{{$data->title}}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Keywords</label>
                  <input type="text" name="keywords" value="{{$data->keywords}} " class="form-control">
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <input type="text" name="description" value="{{$data->description}}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Company</label>
                  <input type="text" name="company" value="{{$data->company}}"  class="form-control">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="address" value="{{$data->address}}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Fax</label>
                  <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" value="{{$data->email}}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control select2" name="status" style="width: 100%;">
                      <option selected="selected">{{$data->status}}</option>
                      <option>True</option>
                      <option>False</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Choose Icon File</label>
                  <input type="file" name="icon"> 
                </div>
              </div>
              <div class="tab-pane" id="smtp_tab">
                <div class="form-group">
                  <label>Smtpserver</label>
                  <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Smtpmail</label>
                  <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Smtppassword</label>
                  <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Smtpport</label>
                  <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                </div>
              </div> 
              <div class="tab-pane" id="social_tab">   
                <div class="form-group">
                  <label>Facebook</label>
                  <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Instagram</label>
                  <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Twitter</label>
                  <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Youtube</label>
                  <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                </div>  
              </div> 
              <div class="tab-pane" id="about_tab">
                <div class="form-group">
                  <label for="aboutus">About us</label>
                  <textarea class="form-control" id="aboutus" name="aboutus">
                  {!! $data->aboutus !!}
                  </textarea>
                  <script>
                    ClassicEditor
                            .create( document.querySelector( '#aboutus' ) )
                            .then( editor => {
                                    console.log( editor );
                            } )
                            .catch( error => {
                                    console.error( error );
                            } );
                  </script>
                </div>
              </div> 
              <div class="tab-pane" id="contact_tab">   
                <div class="form-group">
                  <label for="aboutus">Contact</label>
                  <textarea class="form-control" id="contact" name="contact">
                  {!! $data->contact !!}
                  </textarea>
                  <script>
                    ClassicEditor
                            .create( document.querySelector( '#contact' ) )
                            .then( editor => {
                                    console.log( editor );
                            } )
                            .catch( error => {
                                    console.error( error );
                            } );
                  </script>
                </div>
              </div> 
              <div class="tab-pane" id="reference_tab">
                <div class="form-group">
                  <label for="aboutus">References</label>
                  <textarea class="form-control" id="references" name="references">
                  {!! $data->references !!}
                  </textarea>
                  <script>
                    ClassicEditor
                            .create( document.querySelector( '#references' ) )
                            .then( editor => {
                                    console.log( editor );
                            } )
                            .catch( error => {
                                    console.error( error );
                            } );
                  </script>
                </div>       
              </div>
          </div><!-- /.tab-content -->
        </div><!-- nav-tabs-custom -->
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </section><!-- /.content -->
</div>
@endsection