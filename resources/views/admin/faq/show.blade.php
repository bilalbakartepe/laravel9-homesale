@extends('layouts.adminbase')

@section('tittle', "Show House: ".$data->title)


@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection

@section('content')
<div class="content-wrapper">
  <br>
          <div>
            <div class="row">
              <div class="col-sm-2">
                <a href="/admin/faq/edit/{{$data->id}}" class="btn btn-block btn-primary btn-lg">
                  Edit
                </a>
              </div>

              <div class="col-sm-1">
              </div>


              <div class="col-sm-2">
                <a href="/admin/faq/destroy/{{$data->id}}" class="btn btn-block btn-danger btn-lg">
                  Delete
                </a>
              </div>

            </div>
          </div>
          <br>
          <div class="box">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Show FAQ:  {{$data->question}}
            </h1>
              <ol class="breadcrumb float-sm-right">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> FAQ</a></li>
                <li><a>Show FAQ</a></li>
              </ol>

          </section>
          <br>
          <div class="row">
            <div class="col-xs-12">

                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                  <tbody>
                    <tr>
                      <th>Details The FAQ</th>
                    </tr>
                    <tr><td>ID              </td><td>{{$data->id}}</td></tr>
                    <tr><td>Question           </td><td>{{$data->question}}</td></tr>
                    <tr><td>Answer        </td><td>{!! $data->answer !!}</td></tr>
                    <tr><td>Status     </td><td>{{$data->status}}</td></tr>
                    
                  </tbody>
                </table>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div>
        </div>
@endsection
