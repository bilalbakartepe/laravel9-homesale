<table class="table table-bordered">
<tbody>
<tr>
    <th style="width: 10px">ID</th>
    <th>Comment</th>
    <th>Rate</th>
    <th>Advert</th>
    <th>Status</th>
</tr>
@foreach($comments as $rs)
<tr>
    <td>{{$rs->id}}</td>

    <td>{{$rs->comment}}</td>
    <td>{{$rs->rate}}</td>
    <td><a href="/house/{{$rs->home_id}}">{{App\Http\Controllers\AdminPanel\CommentConroller::getHomeTitle($rs->home_id)}}</a> </td>
    <td>{{$rs->status}}</td>    
    <td>
        <a href="/userpanel/reviews/edit/{{$rs->id}}" >
        <i class="fa fa-fw fa-edit"></i> Edit</a>
    </td>
</tr>
@endforeach
</tbody></table>