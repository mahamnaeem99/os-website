<x-layout>
{{-- <div class="d-flex justify-content-between align-items-center px-1 px-md-4 mt-5">
    <button class="previous btn btn-sm shadow-none d-flex align-items-center">
      <img src="./images/Path 19.png" alt="" srcset="">
      <p class="d-md-inline d-none mb-0 prev-text px-3">PREVIOUS</p>
    </button>
    <p class="our-work pt-4 pb-3 mt-3 hfs">OUR WORK</p>
    <button class="next btn btn-sm shadow-none d-flex align-items-center"> 
      <p class="d-md-inline d-none mb-0 next-text px-3">NEXT</p>
      <img src="./images/Path 18.png" alt="" srcset="">
    </button>
</div> --}}
<div class="text-center">
  <p class="our-work pt-4 mt-5 hfs">OUR WORK</p>
</div>
    
    <div class="container-fluid px-md-5 px-1">
        <div class="row mx-2 mx-xl-0">
          
          <div class="col-sm-6 brands g-0 position-relative">
            <a href="{{url('/omh')}}">
            <img src="{{asset('images/omh_banner.png')}}" alt="" class="parentt">
            <div class="onHover position-absolute bgPurple d-flex align-items-center justify-content-center">
              <p class="brands-name">OH MY HERB</p>
            </div>
          </a>
          </div>
          
          <div class="col-sm-6 brands g-0 position-relative">
            <a href="{{url('/eyewinsome')}}">
            {{-- <img src="{{asset('images/blue.png')}}" alt="" class="parentt"> --}}
            <video autoplay muted loop id="" class="work-videos w-100">
              <source src="./images/ew_video1.mp4" type="video/mp4">
            </video>
            <div class="onHover position-absolute bgPurple d-flex align-items-center justify-content-center">
              <p class="brands-name">EYE WINSOME</p>
            </div>
          </a>
          </div>
        </div>

        <div class="row mx-2 mx-xl-0">
            <div class="col-sm-6 brands g-0 position-relative">
              <a href="{{url('/saeedghani')}}">
                <video autoplay muted loop id="" class="work-videos w-100">
                  <source src="./images/ghani_logo.mp4" type="video/mp4">
                </video>
              <div class="onHover position-absolute bgPurple d-flex align-items-center justify-content-center">
                <p class="brands-name">GHANI'S NATURE</p>
              </div>
              </a>
            </div>
            <div class="col-sm-6 brands g-0 position-relative">
              <a href="{{url('/dealsabad')}}">
              <img src="{{asset('images/Group 26.png')}}" alt="" class="parentt">
              <div class="onHover position-absolute bgPurple d-flex align-items-center justify-content-center">
                <p class="brands-name">DEALS ABAAD</p>
              </div>
              </a>
            </div>
          </div>
          <div class="row mx-2 mx-xl-0 mb-3">
            <div class="col-sm-6 brands g-0 position-relative">
              <a href="{{url('/weblitt')}}">
                <video autoplay muted loop id="" class="work-videos w-100">
                  <source src="./images/weblit_work.mp4" type="video/mp4">
                </video>
                <div class="onHover position-absolute bgGreen d-flex align-items-center justify-content-center">
                  <p class="brands-name">WEBLITT</p>
                </div>
              </a>
            </div>
            {{-- <div class="col-sm-6 mm g-0">
              <a href="{{url('/omh')}}">
              <img src="{{asset('images/blue.png')}}" alt="" class="parentt">
              </a>
            </div> --}}
          </div>
    </div>

{{-- @include('layouts.footer') --}}
<x-footer />
</x-layout>