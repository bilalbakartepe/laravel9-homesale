@extends('layouts.adminwindow')

@section('title', "Show Message: ".$data->subject)

@section('content')
  <br>
          <div>
            <div class="row">
              <div class="col-sm-2">
                <a href="/admin/message/destroy/{{$data->id}}" class="btn btn-block btn-danger btn-lg">
                  Delete
                </a>
              </div>
            </div>
          </div>
          <br>

          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Show Message:  {{$data->subject}}
            </h1>
              <ol class="breadcrumb float-sm-right">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a>Show Message</a></li>
              </ol>

          </section>
          <br>
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                  <tbody>
                    <tr>
                      <th>Details The House</th>
                    </tr>
                    <tr><td>ID              </td><td>{{$data->id}}</td></tr>
                    <tr><td>Name           </td><td>{{$data->Name}}</td></tr>
                    <tr><td>Phone        </td><td>{{$data->phone}}</td></tr>
                    <tr><td>Email          </td><td>{{$data->email}}</td></tr>
                    <tr><td>Subject     </td><td>{{$data->subject}}</td></tr>
                    <tr><td>Message          </td><td>{{$data->message}}</td></tr>
                    <tr><td>Admin Note        </td>
                      <td>
                        <form action="/admin/message/update/{{$data->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <textarea name="note" id="note" cols="100" rows="10">
                          {{$data->note}}
                          </textarea>
                          <button type="submit">Update</button>
                        </form>
                      </td>
                    </tr>
                    <tr><td>Status          </td><td>{{$data->status}}</td></tr>
                  </tbody>
                </table>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div>
        </div>
@endsection
