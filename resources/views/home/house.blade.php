@extends('layouts.nosliderfrontbase')

@section('title', $house->title)

@section('content')

    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shop Detail</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="/">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Details</p>
            </div>
        </div>
    </div>
    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">

                            <div class="carousel-item active">
                                <img class="w-100 h-100" src="{{Storage::url($images[0]->imagepath)}}" alt="Image">
                            </div>
                        @foreach($images as $image)
                            <div class="carousel-item">
                                <img class="w-100 h-100" src="{{Storage::url($image->imagepath)}}" alt="Image">
                            </div>
                        @endforeach
                       
                        
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold">{{$house->title}}</h3>
                <h3 class="font-weight-semi-bold mb-4">
                    @if($house->update_price ==0)
                        Price..:${{$house->price}}
                    @elseif(($house->update_price < $house->price))
                        Price..:${{$house->update_price}}
                        <h6 class="text-muted ml-2"><del>${{$house->price}}</del></h6>
                    @else 
                        Price..:${{$house->update_price}}
                    @endif</h3>
                <h3 class="text-primary mr-1">Status..:{{$house->status}}</h3>
                @if(count($comments)>1)
                    @php 
                        $avr=0;
                        foreach($comments as $cm)
                            $avr=$avr+$cm->rate;
                        $avr=$avr/count($comments);
                    @endphp

                     <div class="text-primary mb-2">
                        {{number_format($avr, 1)}} 
                        <i class="fas fa-star"></i>
                    </div>
                @else
                
                @endif
                <p class="mb-4">{{$house->description}}</p>
                </div>
                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Details</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Futures</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reviews ({{count($comments)}})</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Details</h4>
                        <p>{!! $house->detail !!}</p>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <h4 class="mb-3">Futures</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        Category..: {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTreeSecond($house->categoryid)}}
                                    </li>
                                    <li class="list-group-item px-0">
                                        Advert Date..: {{$house->expire_at}}
                                    </li>                                    
                                    <li class="list-group-item px-0">
                                        Location..: {{$house->location}}
                                    </li>
                                    <li class="list-group-item px-0">
                                        Building Age..: {{$house->building_age}}
                                    </li>
                                    <li class="list-group-item px-0">
                                        Floor..: {{$house->floor}}
                                    </li>
                                    <li class="list-group-item px-0">
                                        Status..: {{$house->status}}
                                    </li>
                                    <li class="list-group-item px-0">
                                        Dues..: {{$house->dues}}
                                    </li>
                                  </ul> 
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        Room Number..: {{$house->room_number}}
                                    </li>
                                    <li class="list-group-item px-0">
                                        Size..: {{$house->size}}
                                    </li>
                                    <li class="list-group-item px-0">
                                        Bath Number..: {{$house->bath_number}}
                                    </li>
                                    <li class="list-group-item px-0">
                                        Balcony Number..: {{$house->balcony_number}}
                                    </li>
                                    <li class="list-group-item px-0">
                                        Heating..: {{$house->heating}}
                                    </li>
                                    <li class="list-group-item px-0">
                                        Balcony Number..: {{$house->balcony_number}}
                                    </li>
                                  </ul> 
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row">
                            
                            <div class="col-md-6">
                                <h4 class="mb-4">{{count($comments)}} review for "{{$house->title}}"</h4>
                                
                                <div class="media mb-4">
                                    @foreach($comments as $comment)
                                    <img src="" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                    <div class="media-body">
                                        
                                        <h6>{{App\Http\Controllers\AdminPanel\CommentConroller::getUserName($comment->user_id)}}<small> - <i>{{$comment->expire_at}}</i></small></h6>
                                        @if($comment->rate==1)
                                            <div class="text-primary mb-2">
                                                <i class="fas fa-star"></i>
                                            </div>

                                        @elseif($comment->rate==2)
                                            <div class="text-primary mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                                                                       
                                        @elseif($comment->rate==3)
                                            <div class="text-primary mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                           
                                            
                                        @elseif($comment->rate==4)
                                            <div class="text-primary mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            
                                            
                                        @elseif($comment->rate==5)
                                            <div class="text-primary mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <div class="text-primary mb-2">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            
                                        @else
                                            <div class="text-primary">

                                            </div>
                                        @endif
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                </div>
                            
                            @endforeach
                            <div class="col-md-6">
                                <h4 class="mb-4">Leave a review</h4>
                                <small>Your email address will not be published. Required fields are marked *</small>
                                
                                <form role="form" action="/storecomment" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-primary">
                                            
                                            <input type="radio" id="star5" name="rate" value="5"/>
                                            <label for="star5">5</label>
                                            <input type="radio" id="star4" name="rate" value="4"/>
                                            <label for="star4">4</label>
                                            <input type="radio" id="star3" name="rate" value="3"/>
                                            <label for="star3">3</label>
                                            <input type="radio" id="star2" name="rate" value="2"/>
                                            <label for="star2">2</label>
                                            <input type="radio" id="star1" name="rate" value="1"/>
                                            <label for="star1">1</label>
                                            
                                        </div>
                                    </div>
                                    <input type="hidden" name="house_id" value="{{$house->id}}">
                                    <div class="form-group">
                                        <label for="message">Your Review *</label>
                                        <textarea id="message" name="comment" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    @auth
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                    </div>
                                    @else
                                        <a href="/login" class="primary-btn"> For Submit Your Review, Please Login </a>
                                    @endauth

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">You May Also Like</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel">
                    @foreach($houselist1 as $hs)
                    <div class="card product-item border-0">
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
                            <a href="/house/{{$hs->id}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->
@endsection