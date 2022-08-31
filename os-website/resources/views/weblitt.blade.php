<x-layout>
  <!-- omh banner -->
  <div class="omh-ban omh_tagline_web mt-5">
    <video autoplay muted loop id="" class="w-100">
      <source src="./images/weblit_work.mp4" type="video/mp4">
    </video>
  </div>
<div class="mt-5 omh-banner omh_tagline_mobile">
<img src="{{asset('images/weblitmob.gif')}}" class="omh_tagline" />
</div>

    <!-- product description -->
    <div class="">
      <div class="row g-0 justify-content-between mt-0">
          <div class="col-lg-6 col-md-5 col-xl-5 d-flex flex-column justify-content-center mx-md-0 mx-xl-5 px-3 px-lg-5 px-md-3 py-md-0 my-lg-0 my-5">
              <p class="fw-bold yellow-text brands-hfs mb-0">WEBLITT</p>
              {{-- <div class="my-4">
                  <h4 class="yellow-text fw-bold">CLIENT</h4>
                  <p class="fw-bold">Client name</p>
              </div> --}}
  
              <div class="">
                  {{-- <h4 class="yellow-text fw-bold">BRIEF</h4> --}}
                  <p class="brand-description brands-pfs">
                    Weblitt is a digital web design and 
                    web development platform that offers 
                    innovative solutions for your brand’s 
                    website, ensuring that it is recognised
                    by customers and ranks high 
                    in Google searches.              
  
                  </p>
              </div>
  
              <div class="pt-md-5 pt-3">
              <h4 class="yellow-text fw-bold brands-hfs mb-0">WHAT WE DID</h4>
              <p class="mb-0 brand-description brands-pfs">Brand Identity</p>
              <p class="mb-0 brand-description brands-pfs">Branding Guidelines</p>
              <p class="mb-0 brand-description brands-pfs">Social Media Marketing</p>
              </div>
          </div> 
  
          <div class="col-md-6 d-flex justify-content-center">
            <div class="omh_tagline_web">
              <img src="{{asset('images/weblittdes.png')}}" class="omh-img" />
            </div>
            {{-- mob view --}}
          <div class="omh_tagline_mobile">
            <img src="{{asset('images/weblitdesmob.png')}}" class="omh_tagline" />
           </div>
          </div>
      </div> 
  </div>

  <div class="omh_tagline_web">
    <img src="{{asset('images/weblitttagline.png')}}" class="omh_tagline" />
  </div>
  {{-- mobile view --}}
  <div class="omh_tagline_mobile">
   <img src="{{asset('images/webmobview.png')}}" class="omh_tagline" />
 </div>
  

 <div class="omh_tagline_web">
  <img src="{{asset('images/guidmob.png')}}" class="omh_tagline" />
</div>
{{-- mobile view --}}
<div class="omh_tagline_mobile">
 <img src="{{asset('images/Brand guideline OS-07.jpeg')}}" class="omh_tagline" />
</div>

  <div class="omh_tagline_web">
    <img src="{{asset('images/Weblitt post mockup.png')}}" class="omh_tagline" />
  </div>
  {{-- mobile view --}}
<div class="omh_tagline_mobile">
  <img src="{{asset('images/Weblitt post mockup mobile.png')}}" class="omh_tagline" />
 </div>



  <div
  class="
     d-flex
     flex-column
     justify-content-center
    ">
    <section id="slider" class="">
      <div class="container">
        <div class="slider mt-5">
            <div class="owl-carousel">
              <div class="slider-card">
                <div class="d-flex justify-content-center align-items-center mb-4">
                  <video autoplay muted loop id="myVideoda" class="work-videos">
                  <source src="./images/WL_animation.mp4" type="video/mp4">
                </video>
                </div>
              </div>
              <div class="slider-card">
                <div class="d-flex justify-content-center align-items-center mb-4">
                  <img
                    src="{{asset('images/WL creative website_.png')}}"
                    alt=""
                    id="myVideoda" class="work-videos"
                  />
                </div>
              </div>
              <div class="slider-card">
                <div class="d-flex justify-content-center align-items-center mb-4">
                  <img
                    src="{{asset('images/ab to start karley apna business2.png')}}"
                    alt=""
                    id="myVideoda" class="work-videos"
                  />
                </div>	
              </div>
              <div class="slider-card">
                <div class="d-flex justify-content-center align-items-center mb-4">
                  <img
                    src="{{asset('images/google WL.png')}}"
                    alt=""
                    id="myVideoda" class="work-videos"
                  />
                </div>
              </div>
              <div class="slider-card">
                <div class="d-flex justify-content-center align-items-center mb-4">
                  <img
                    src="{{asset('images/WL litt.png')}}"
                    alt=""
                    id="myVideoda" class="work-videos"
                  />
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <!-- omh website ss -->
    <a href="https://weblitt.co">
    <div class="mx-0 mx-md-5 my-5 px-md-5 px-0">
      <video autoplay muted loop id="" class="w-100">
        <source src="./images/Weblitt.mp4" type="video/mp4">
      </video>
      </div>
    </a>
    </div>
   
    <x-projects-card :images=$mobiles />
    {{-- @endforeach --}}
  
  <x-footer />
</x-layout>

{{-- weblitt.mp4 --}}
<script>
  // Owlcarousel
  $(document).ready(function(){
      $(".owl-carousel").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:false,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        center: true,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        responsive:{
                  0:{
                      items:1
                  },
                  600:{
                      items:1
                  },
                  1000:{
                      items:3
                  }
              }
            });
  });
  </script>