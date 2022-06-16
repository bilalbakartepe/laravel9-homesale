@extends('layouts.nosliderfrontbase')

@section('title',$category->title)

@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')




 <!-- Shop Start -->
 <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                
                @include('home.filters.price')
                @include('home.filters.size')
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <!-- <form action="/categoryhouses/{{$category->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="input-group">
                                    <input type="text" class="form-control" name="searching" placeholder="Search by name">
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text bg-transparent text-primary">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form> -->
                            <div class="dropdown ml-4">
                                <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                            Sort by
                                        </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @foreach($houses as $hs)
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{Storage::url($hs->image)}}" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">{{$hs->title}}</h6>
                                <div class="d-flex justify-content-center">
                                @if($hs->update_price ==0)
                                    <h6>${{$hs->price}}</h6>
                                @elseif(($hs->update_price < $hs->price))

                                    <h6>${{$hs->update_price}}</h6>
                                    <h6 class="text-muted ml-2"><del>${{$hs->price}}</del></h6>
                                @else 
                                    <h6>${{$hs->update_price}}</h6>
                                @endif
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @if(sizeof($houses)>10)
                        <div class="col-12 pb-1">
                            <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mb-3">
                                <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </li>
                            </ul>
                            </nav>
                        </div>
                    @endif
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->



















@endsection