<div class="col-lg-12">

<style>
    hr.new1 {
    border-top: 1px solid white;
    }
</style>
<hr class="new1">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid" src="{{Storage::url($firstslide->image)}}" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">{{$firstslide->title}}</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">{{$firstslide->description}}</h3>
                                    <a href="/house/{{$firstslide->id}}" class="btn btn-light py-2 px-3">View Details</a>
                                </div>
                            </div>
                        </div>

                        @foreach($sliderdata as $rs)

                    <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="{{Storage::url($rs->image)}}" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">{{$rs->title}}</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">{{$rs->description}}</h3>
                                    <a href="/house/{{$rs->id}}" class="btn btn-light py-2 px-3">View Details</a>
                                </div>
                            </div>
                        </div>
                    

                    @endforeach
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>