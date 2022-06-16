@extends('layouts.adminwindow')

@section('title', "Show Comment: ".\app\Http\Controllers\AdminPanel\CommentConroller::getHomeTitle($data->home_id))


@section('content')
  <br>
          <div>
            <div class="row">
              <div class="col-sm-2">
                <a href="/admin/comment/destroy/{{$data->id}}" class="btn btn-block btn-danger btn-lg">
                  Delete
                </a>
              </div>
            </div>
          </div>
          <br>

          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Show {{\app\Http\Controllers\AdminPanel\CommentConroller::getUserName($data->user_id)}}'s Comment for {{\app\Http\Controllers\AdminPanel\CommentConroller::getHomeTitle($data->home_id)}}:
            </h1>
              <ol class="breadcrumb float-sm-right">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a>Show Comment</a></li>
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
                      <th>Details The Comment</th>
                    </tr>
                    <tr><td>ID              </td><td>{{$data->id}}</td></tr>
                    <tr><td>Username           </td><td>{{\app\Http\Controllers\AdminPanel\CommentConroller::getUserName($data->user_id)}}</td></tr>
                    <tr><td>Rate        </td><td>{{$data->rate}}</td></tr>
                    <tr><td>Link of The Advert          </td><td>/house/{{$data->home_id}}</td></tr>
                    <tr><td>Comment     </td><td>{{$data->comment}}</td></tr>
                    <tr><td>Admin Note        </td>
                      <td>
                        <form action="/admin/comment/update/{{$data->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                          <select name="status" id="status">
                            <option value="{{$data->status}}">{{$data->status}}</option>
                            <option value="true">True</option>
                            <option value="false">False</option>
                          </select>
                          <button type="submit">Update</button>
                        </form>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div>
        </div>
@endsection
