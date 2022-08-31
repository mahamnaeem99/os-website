<x-layout>
   <!-- omh banner -->
<div class="mt-5 omh-banner omh_tagline_web">
    <img src="{{asset('images/omh_banner.png')}}" class="omh-banner-img" />
</div>
<div class="mt-5 omh-banner omh_tagline_mobile">
  <img src="{{asset('images/omhbanner_mob.png')}}" class="omh_tagline" />
</div>
  <!-- product description -->

  <div class="">
    <div class="row g-0 justify-content-between mt-0">
        <div class="col-lg-6 col-md-5 col-xl-5 d-flex flex-column justify-content-center mx-md-0 mx-xl-5 px-3 px-lg-5 px-md-3 py-md-0 my-lg-0 my-5">
            <p class="fw-bold yellow-text brands-hfs mb-0">OH MY HERB</p>
            {{-- <div class="my-4">
                <h4 class="yellow-text fw-bold">CLIENT</h4>
                <p class="fw-bold">Client name</p>
            </div> --}}

            <div class="">
                {{-- <h4 class="yellow-text fw-bold">BRIEF</h4> --}}
                <p class="brand-description brands-pfs">
                  Providing 100% natural and herbal 
                  skincare products in Pakistan. 
                  We specialize in offering organic and 
                  natural skin and hair care products. Our 
                  products are cruelty-free, vegan, and 
                  handcrafted using traditional processes, 
                  ensuring the highest quality at 
                  a reasonable price.
                </p>
            </div>

            <div class="pt-md-5 pt-3">
            <h4 class="yellow-text fw-bold brands-hfs mb-0">WHAT WE DID</h4>
            <p class="mb-0 brand-description brands-pfs">Social Media Marketing</p>
            <p class="mb-0 brand-description brands-pfs">Packaging</p>
            <p class="mb-0 brand-description brands-pfs">E-commerce</p>
            <p class="mb-0 brand-description brands-pfs">Photography</p>
            </div>
        </div> 

        <div class="col-md-6 d-flex justify-content-center">
          <div class="omh_tagline_web">
            <img src="{{asset('images/omh_logo.png')}}" class="omh-img" />
          </div>
        </div>
        {{-- mob view --}}
        <div class="omh_tagline_mobile">
          <img src="{{asset('images/omhlogomob.png')}}" class="omh_tagline" />
         </div>
    </div> 
</div>
  <!-- mob and gallery -->
  <div class="omh_tagline_web">
    <img src="{{asset('images/omh.png')}}" class="omh_tagline" />
  </div>
  {{-- mobile view --}}
  <div class="omh_tagline_mobile">
   <img src="{{asset('images/omh_img_mob.png')}}" class="omh_tagline" />
  </div>
  

<div class="omh_tagline_web">
  <img src="{{asset('images/omh_tagline.png')}}" class="omh_tagline" />
</div>
{{-- mobile view --}}
<div class="omh_tagline_mobile">
 <img src="{{asset('images/omh_taglinemob.png')}}" class="omh_tagline" />
</div>


<div class="omh_tagline_web">
  <img src="{{asset('images/omh_img.png')}}" class="omh_tagline" />
</div>
{{-- mobile view --}}
<div class="omh_tagline_mobile">
 <img src="{{asset('images/omh_mob.png')}}" class="omh_tagline" />
</div>

<div class="omh_tagline_web">
  <img src="{{asset('images/omhdes.png')}}" class="omh_tagline" />
</div>
{{-- mobile view --}}
<div class="omh_tagline_mobile">
 <img src="{{asset('images/omhdesmob.png')}}" class="omh_tagline" />
</div>
  
  <div class="ew_video d-flex">
    <video autoplay muted loop id="myVideo">
      <source src="./images/OMH.mp4" type="video/mp4">
    </video>

    <video autoplay muted loop id="myVideo2">
      <source src="./images/omhmob.mp4" type="video/mp4">
    </video>

  </div>
   
    <div
      class="
         d-flex
         flex-column
         justify-content-center
         portfolio-sectionn
        ">
        <section id="slider" class="my-0">
          <div class="container">
            <div class="slider mt-5">
                <div class="owl-carousel">
                  <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                      <video autoplay muted loop id="myVideoda" class="work-videos">
                      <source src="./images/omh_ani.mp4" type="video/mp4">
                    </video>
                    </div>
                  </div>
                  <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                      <img
                        src="{{asset('images/Artboard 11 (3).png')}}"
                        alt=""
                        id="myVideoda" class="work-videos"
                      />
                    </div>
                  </div>
                  <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                      <img
                        src="{{asset('images/Artboard 11.png')}}"
                        alt=""
                        id="myVideoda" class="work-videos"
                      />
                    </div>	
                  </div>
                  <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                      <img
                        src="{{asset('images/Artboard 11 (2).png')}}"
                        alt=""
                        id="myVideoda" class="work-videos"
                      />
                    </div>
                  </div>
                  <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                      <img
                        src="{{asset('images/Artboard 6.png')}}"
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
<a href="https://ohmyherb.com.pk">
<div class="mx-0 mx-md-5 my-5 px-md-5 px-0">
  <video autoplay muted loop id="" class="w-100">
    <source src="./images/omh_video.mp4" type="video/mp4">
  </video>
</div>
</a>
</div>
   </div>
 </div>
<!-- SECTION -->
<x-projects-card :images=$mobiles />
<x-footer />
</x-layout>
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