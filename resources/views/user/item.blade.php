<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Items</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">


        @foreach($item as $items)

        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="200 px" src="itemimage/{{$items->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$items->name}}</p>
              <span class="text-sm text-grey">{{$items->housingtype}}</span>
              <span class="text-sm text-grey">{{$items->location}}</span>
            </div>
          </div>
        </div>
        
        @endforeach

      </div>
    </div>
  </div>