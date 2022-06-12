<div class="col-md-6">
    <h4 class="mb-4">Leave a review</h4>
    <small>Your email address will not be published. Required fields are marked *</small>
    
    <form role="form" action="/updatecomment/{{$comment->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="d-flex my-3">
            <p class="mb-0 mr-2">Your Last Rating * : 
                <div class="text-primary mb-2">
                    {{$comment->rate}} 
                    <i class="fas fa-star"></i>
                    
                </div>
            </p>     
        </div>
        <div class="d-flex my-3">
            <p class="mb-0 mr-2">Edit Rating * : 
            </p>     
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

        <input type="hidden" name="house_id" value="{{$comment->home_id}}">
        
        <div class="form-group">
            <label for="message">Your Review *</label>
            <textarea id="message" name="comment" cols="30" rows="5" class="form-control">
                {{$comment->comment}};
            </textarea>
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