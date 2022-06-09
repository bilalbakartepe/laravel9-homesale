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
                <a href="/admin/house/edit/{{$data->id}}" class="btn btn-block btn-primary btn-lg">
                  Edit
                </a>
              </div>

              <div class="col-sm-1">
              </div>


              <div class="col-sm-2">
                <a href="/admin/house/delete/{{$data->id}}" class="btn btn-block btn-danger btn-lg">
                  Delete
                </a>
              </div>

            </div>
          </div>
          <br>

          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Show House:  {{$data->title}}
            </h1>
              <ol class="breadcrumb float-sm-right">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a>Show House</a></li>
              </ol>

          </section>
          <br>
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Responsive Hover Table</h3>
                  <div class="box-tools">
                    <div class="input-group">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                  <tbody>
                    <tr>
                      <th>Details The House</th>
                    </tr>
                    <tr><td>ID              </td><td>{{$data->id}}</td></tr>
                    <tr><td>Title           </td><td>{{$data->title}}</td></tr>
                    <tr><td>Keywords        </td><td>{{$data->keywords}}</td></tr>
                    <tr><td>Description     </td><td>{{$data->description}}</td></tr>
                    <tr>
                      <td>@if($data->image)
                            <img src="{{Storage::url($data->image)}}" style="height: 120px">
                          @endif

                      </td>
                    </tr>
                    <tr><td>Status          </td><td>{{$data->status}}</td></tr>
                    <tr><td>Category        </td><td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTreeSecond($data->categoryid)}}</td></tr>
                    <tr><td>Detail          </td><td>{!! $data->detail !!}</td></tr>
                    <tr><td>Location        </td><td>{{$data->location}}</td></tr>
                    <tr><td>Heating         </td><td>{{$data->heating}}</td></tr>
                    <tr><td>Room Number     </td><td>{{$data->room_number}}</td></tr>
                    <tr><td>Price           </td><td>{{$data->price}}</td></tr>
                    <tr><td>Size            </td><td>{{$data->size}}</td></tr>
                    <tr><td>Bath Number     </td><td>{{$data->bath_number}}</td></tr>
                    <tr><td>Balcony Number  </td><td>{{$data->balcony_number}}</td></tr>
                    <tr><td>Floor           </td><td>{{$data->floor}}</td></tr>
                    <tr><td>Building Age    </td><td>{{$data->buildin_age}}</td></tr>
                    <tr><td>Dues            </td><td>{{$data->dues}}</td></tr>
                    <tr><td>User ID         </td><td>{{$data->status}}</td></tr>
                    <tr><td>Created Date    </td><td>{{$data->expire_at}}</td></tr>
                    <tr><td>Updated Date    </td><td>{{$data->update_at}}</td></tr>
                  </tbody>
                </table>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div>
        </div>
@endsection
