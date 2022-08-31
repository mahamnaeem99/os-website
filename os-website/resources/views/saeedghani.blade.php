<x-layout>
  <!-- ew banner -->
  <div class="omh-banner omh_tagline_web mt-5">
    <video autoplay muted loop id="" class="w-100">
      <source src="./images/ghani_logo.mp4" type="video/mp4">
    </video>
</div>
<div class="mt-5 omh-banner omh_tagline_mobile">
  <img src="{{asset('images/GN Logomob.gif')}}" class="omh_tagline" />
</div>

   <!-- product description -->
   <div class="">
     <div class="row g-0 justify-content-between mt-0">
         <div class="col-lg-6 col-md-5 col-xl-5 d-flex flex-column justify-content-center mx-md-0 mx-xl-5 px-3 px-lg-5 px-md-3 py-md-0 my-lg-0 my-5">
             <p class="fw-bold yellow-text brands-hfs mb-0">GHANI’S NATURE</p>
             {{-- <div class="my-4">
                 <h4 class="yellow-text fw-bold">CLIENT</h4>
                 <p class="fw-bold">Client name</p>
             </div> --}}
 
             <div class="">
                 {{-- <h4 class="yellow-text fw-bold">BRIEF</h4> --}}
                 <p class="brand-description brands-pfs">
                  Ghani’s Nature is an exclusive brand of 
                  Saeed Ghani which offers a wide range 
                  of herbal skin care and haircare that caters 
                  to your need. We believe in providing the 
                  best natural and organic solutions for you.                
 
                 </p>
             </div>
 
             <div class="pt-md-5 pt-3">
             <h4 class="yellow-text fw-bold brands-hfs mb-0">WHAT WE DID</h4>
             <p class="mb-0 brand-description brands-pfs">Social Media Marketing</p>
             <p class="mb-0 brand-description brands-pfs">Website</p>
             <p class="mb-0  brand-description brands-pfs">Photography</p>
             </div>
         </div> 
 
         <div class="col-md-6 d-flex justify-content-center">
          <div class="omh_tagline_web">
         <img src="{{asset('images/aloe.png')}}" class="omh-img" />
          </div>
          {{-- mob view --}}
          <div class="omh_tagline_mobile">
            <img src="{{asset('images/alowmob.png')}}" class="omh_tagline" />
           </div>
         </div>
     </div> 
 </div>
 
 
 <div class="omh_tagline_web">
  <img src="{{asset('images/saeedghani.png')}}" class="omh_tagline" />
</div>
{{-- mobile view --}}
<div class="omh_tagline_mobile">
 {{-- <img src="{{asset('images/saeedghanimob.png')}}" class="omh_tagline" /> --}}
 <div class="text-center  slider-grid">
  <div class="row mx-auto my-auto justify-content-center">
      <div id="recipeCarousel" class="carousel slide g-0" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <div class="col-md-12">
                    <img src="{{asset('images/samob1.png')}}" alt="" class="omh_tagline"/>
                  </div>
                </div>  
                <div class="carousel-item">
                  <div class="col-md-12">
                    <img src="{{asset('images/samob2.png')}}" alt="" class="omh_tagline"/>
                  </div>
                </div>
              
          </div>
          <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
      </div>
  </div>
</div>
</div>
 
 {{-- pink carousel --}}

  <!-- products -->
  <div class="omh-banner d-flex my-5 my-md-0">
   <video autoplay muted loop id="" class="w-100">
     <source src="./images/sw_shehnai.mp4" type="video/mp4">
   </video>
 </div>
 
 
 <div
 class="
    d-flex
    flex-column
    justify-content-center
    portfolio-sectionn
   ">
   <section id="slider" class="">
     <div class="container">
       <div class="slider mt-5">
        <div class="owl-carousel">
          <div class="slider-card">
            <div class="d-flex justify-content-center align-items-center mb-4">
              <video autoplay muted loop id="myVideoda" class="work-videos">
              <source src="./images/ghani_mob.mp4" type="video/mp4">
            </video>
            </div>
          </div>
          <div class="slider-card">
            <div class="d-flex justify-content-center align-items-center mb-4">
              <img
                src="{{asset('images/Artboard 5.png')}}"
                alt=""
                id="myVideoda" class="work-videos"
              />
            </div>
          </div>
          <div class="slider-card">
            <div class="d-flex justify-content-center align-items-center mb-4">
              <img
                src="{{asset('images/Ghanis Sep-RecoveredArtboard 30.png')}}"
                alt=""
                id="myVideoda" class="work-videos"
              />
            </div>	
          </div>
          <div class="slider-card">
            <div class="d-flex justify-content-center align-items-center mb-4">
              <img
                src="{{asset('images/ghanis augustArtboard 28.png')}}"
                alt=""
                id="myVideoda" class="work-videos"
              />
            </div>
          </div>
          <div class="slider-card">
            <div class="d-flex justify-content-center align-items-center mb-4">
              <img
                src="{{asset('images/ghanis augustArtboard 15.png')}}"
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

<a href="https://ghanisnature.com/">
<div class="mx-0 mx-md-5 my-5 px-md-5 px-0">
<video autoplay muted loop id="" class="w-100">
<source src="./images/GN.mp4" type="video/mp4">
</video>
</div>
</a>
</div>
</div>
   <!-- SECTION -->
   <x-projects-card :images=$mobiles />
 
   <!-- SECTION -->
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