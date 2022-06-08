
@foreach($maincategories as $maincategory)   
    @if(count($maincategory->children))
        <div class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown">{{$maincategory->title}} <i class="fa fa-angle-down float-right mt-1"></i></a>
            @include('home.categorytree',['maincategories' => $maincategory->children])
        
        </div>
    @elseif($maincategory->parentid !=0)
        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
            <a href="/categoryhouses/{{$maincategory->id}}/{{$maincategory->title}}" class="dropdown-item">{{$maincategory->title}}</a>
        </div>
    @else
        <a href="/categoryhouses/{{$maincategory->id}}/{{$maincategory->title}}" class="nav-item nav-link">{{$maincategory->title}}</a>
    @endif
@endforeach