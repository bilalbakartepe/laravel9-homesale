<div class="row">
    <div class="col-sm-3">
        <a href="/userpanel/adverts/create" class="btn btn-block btn-primary btn-lg">
            Add House
        </a>
    </div>
</div>
<table class="table table-bordered">
    <tbody>
    <tr> 
        <th style="width: 10px">ID</th>
        <th>Category</th>
        <th>Title</th>
        <th>Image</th>
        <th>Image Gallery</th>
        <th>Size</th>
        <th>Price</th>
        <th>Location</th>
        <th>Status</th>
    </tr>
    @foreach($adverts as $rs)
    <tr>
        <td>{{$rs->id}}</td>

        <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTreeSecond($rs->categoryid)}}</td>
        <td>{{$rs->title}}</td>
        <td>@if($rs->image)
            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
            @endif

        </td>
        <td>
            <a href="/admin/image/{{$rs->id}}"
            onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
            <img src="{{asset('assets')}}/Admin/img/imgGallery.png" > 
            </a>
            
            
        </td>
        <td>{{$rs->size}}</td>
        <td>{{$rs->price}}</td>
        <td>{{$rs->location}}</td>
        <td>{{$rs->status}}</td>
        <td>
        
        </td>
        <td>
        <a href="/userpanel/adverts/edit/{{$rs->id}}" >
        <i class="fa fa-fw fa-edit"></i> Edit</a></td>
        <td>
        <a href="/userpanel/adverts/destroy/{{$rs->id}}" onclick="return confirm('Are you sure for deleting ?')">
        <i class="fa fa-fw fa-ban"></i>Delete</a>

        <td>
        <a href="/house/{{$rs->id}}">
        <i class="fa fa-fw fa-bars"></i> Show</a></td>
    </tr>
    @endforeach
    </tbody>
</table>