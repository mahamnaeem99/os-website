@props(['galleryImages','phone','video'])
<!-- mob and gallery -->
<div class="container">
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 g-0 mb-5">
        <div class="parent1 mt-4 mx-auto">
          <img src='{{asset("images/$phone")}}' alt="" class="phone" />
          <div class="child1">
            {{-- <img src="{{asset('images/Body butter Animation.png')}}" /> --}}
            <div class="">
              <video autoplay muted loop id="myVideo">
                <source src='{{asset("images/$video")}}' type="video/mp4" class="">
              </video>
            </div>
          </div>
        </div>
      </div>
      <div
        class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 g-0 ps-md-3 d-flex flex-column justify-content-center"
      >
      <div class="row mx-2">
        @foreach($galleryImages as $galleryImage)
          <div class="col-4 g-0">
            @if (pathinfo($galleryImage, PATHINFO_EXTENSION) == 'png')
              <img src='{{asset("images/$galleryImage")}}' alt="" class="gallery" />

            @else
              <video autoplay muted loop id="myVideoew">
                <source src='{{asset("images/$galleryImage")}}' type="video/mp4" class="">
              </video>
            @endif
          </div>    
        @endforeach
      </div>
        
      </div>
    </div>
  </div>