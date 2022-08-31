@props(['images'])
<div class="container-fluid view-more-section">
    <div class="py-5 row">
         {{-- @foreach($images as $image)
            <div class="col-12 col-md-4 col-sm-6 mb-3">
                <img src='{{asset("images/$image")}}' alt="" class="parentt" />
            </div>
         @endforeach --}}
         <div class="brands col-12 col-md-4 col-sm-6 g-0 mb-3 ms-0 ms-md-3 mx-0 px-3 px-sm-3">
          <a href="{{url('/weblitt')}}">
            <div class="project_card bgPurple d-flex align-items-center justify-content-center">
              <p class="brands-name">OH MY HERB</p>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-4 col-sm-6 mb-3 px-sm-3 mx-0 brands g-0 px-3">
          <a href="{{url('/weblitt')}}">
            <div class="project_card bgPurple d-flex align-items-center justify-content-center">
              <p class="brands-name">WEBLITT</p>
            </div>
          </a>
        </div>
        
      <div class="col-md-3 col-12 col-sm-12 d-flex flex-column justify-content-center ps-3">
        <p class="view-more-para fs-1">VIEW MORE PROJECTS</p>
        <div>
          <a href="/work">
          <button class="btn p-0">
            <img src="{{asset('images/divedeep_grey.png')}}" alt="" class="dive-deep-btn">
          </button>
        </a>
        </div>
      </div>
    </div>
  </div>

  <script>
      $(".dive-deep-btn").mouseover(function () {
    $(this).attr('src','../images/dive_deep.gif');
    timer = setTimeout(() => {
      $(this).attr('src','../images/divedeep-yellow.png');
    }, 2000);
        }).mouseout(function () {
$(this).attr('src', '../images/divedeep_grey.png');
});
  </script>