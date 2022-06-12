@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection


  <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Edit & Update House..: {{$house->title}}</h3>
      </div><!-- /.box-header -->
      <!-- form start -->
      <form role="form" action="/userpanel/adverts/update/{{$house->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="box-body">
          <div class="form-group">

          <label >Parent Category</label>

            <select name="categoryid" class="form-control">

              @foreach($datalist as $rs)
                <option value="{{$rs->id}}" @if($rs->id==$dataCategory->parentid) selected="selected" @endif>
                  {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
              @endforeach
            </select>

            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$house->title}}">
          </div>
          <div class="form-group">
            <label for="keywords">Keywords</label>
            <input type="text" class="form-control" id="keywords" name="keywords" value="{{$house->keywords}}">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$house->description}}">
          </div>

          <div class="form-group">
            <label for="detail">Detail</label>
            <textarea class="form-control" id="detail" name="detail">
            {!! $house->detail !!}
            </textarea>
            <script>
              ClassicEditor
                      .create( document.querySelector( '#detail' ) )
                      .then( editor => {
                              console.log( editor );
                      } )
                      .catch( error => {
                              console.error( error );
                      } );
            </script>


          <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="{{$house->location}}">
          </div>


          <div class="form-group">
            <label for="heating">Heating</label>
            <input type="text" class="form-control" id="heating" name="heating" value="{{$house->heating}}">
          </div>

          <div class="form-group">
            <label for="room_number">Room Number</label>
            <input type="text" class="form-control" id="room_number" name="room_number" value="{{$house->room_number}}">
          </div>

          <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="updated_price" value="{{$house->price}}">
          </div>
          <div class="form-group">
            <label for="size">Size</label>
            <input type="text" class="form-control" id="size" name="size" value="{{$house->size}}">
          </div>
          <div class="form-group">
            <label for="bath_number">Bath Number</label>
            <input type="text" class="form-control" id="bath_number" name="bath_number" value="{{$house->bath_number}}">
          </div>
          <div class="form-group">
            <label for="balcony_number">Balcony Number</label>
            <input type="text" class="form-control" id="balcony_number" name="balcony_number" value="{{$house->balcony_number}}">
          </div>
          <div class="form-group">
            <label for="floor">Which Floor</label>
            <input type="text" class="form-control" id="floor" name="floor" value="{{$house->floor}}">
          </div>
          <div class="form-group">
            <label for="buildin_age">Building Age</label>
            <input type="text" class="form-control" id="buildin_age" name="buildin_age" value="{{$house->building_age}}">
          </div>
          <div class="form-group">
            <label for="dues">Dues</label>
            <input type="text" class="form-control" id="dues" name="dues" value="{{$house->dues}}">
          </div>

          <div class="form-group">
            <label>Image</label>
            <input type="file" name="image">

          </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>