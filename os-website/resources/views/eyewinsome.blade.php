<x-layout>
  <!-- ew banner -->
  
  <div class="omh-banner d-flex mt-5">
   <video autoplay muted loop id="" class="w-100">
     <source src="./images/ew_video1.mp4" type="video/mp4">
   </video>
 </div>
   {{-- <div class="ew_video mt-5">
     <video autoplay muted loop id="myVideo">
       <source src="./images/ew_video1.mp4" type="video/mp4">
     </video>
   </div> --}}
 
   <!-- product description -->
   <div class="">
     <div class="row g-0 justify-content-between mt-0">
         <div class="col-lg-6 col-md-5 col-xl-5 d-flex flex-column justify-content-center mx-md-0 mx-xl-5 px-3 px-lg-5 px-md-3 py-md-0 my-lg-0 my-5">
             <p class="fw-bold yellow-text brands-hfs mb-0">EYEWINSOME</p>
             {{-- <div class="my-4">
                 <h4 class="yellow-text fw-bold">CLIENT</h4>
                 <p class="fw-bold">Client name</p>
             </div> --}}
 
             <div class="">
                 {{-- <h4 class="yellow-text fw-bold">BRIEF</h4> --}}
                 <p class="brand-description brands-pfs">
                   Shop for prescription glasses, sunglasses,
                   blue light glasses, and more at highly 
                   economical rates. We have the latest 
                   trend available for your daily needs.                 
 
                 </p>
             </div>
 
             <div class="pt-md-5 pt-3">
             <h4 class="yellow-text fw-bold brands-hfs mb-0">WHAT WE DID</h4>
             <p class="mb-0 brand-description brands-pfs">Social Media Marketing</p>
             <p class="mb-0 brand-description brands-pfs">E-commerce</p>
             <p class="mb-0 brand-description brands-pfs">Photography</p>
             </div>
         </div> 
 
         <div class="col-md-6 d-flex justify-content-center">
          <div class="omh_tagline_web">
         <img src="{{asset('images/ew.png')}}" class="omh-img" />
          </div>
          {{-- mob view --}}
          <div class="omh_tagline_mobile">
            <img src="{{asset('images/ewmob.png')}}" class="omh_tagline" />
           </div>
         </div>
     </div> 
 </div>
   
 
 
 <div class="omh_tagline_web">
   <img src="{{asset('images/ewtagline.png')}}" class="omh_tagline" />
 </div>
 {{-- mobile view --}}
 <div class="omh_tagline_mobile">
  <img src="{{asset('images/ewmobileview.png')}}" class="omh_tagline" />
</div>
 
 <div class="omh_tagline_web">
   <img src="{{asset('images/ew1.png')}}" class="omh_tagline" />
 </div>
  {{-- mobile view --}}
  <div class="omh_tagline_mobile">
    <img src="{{asset('images/Artboard 3 mobile view.png')}}" class="omh_tagline" />
  </div>


 <div class="container-fluid p-0 pink-grid">
   <div class="row p-0 g-0">
     <div class="col-md-4 p-0">
       <img src="{{asset('images/ewp1.png')}}" class="omh-banner-img" />
     </div>
     <div class="col-md-4 p-0">
       <img src="{{asset('images/ewp2.png')}}" class="omh-banner-img" />
     </div>
     <div class="col-md-4 p-0">
       <img src="{{asset('images/ewp3.png')}}" class="omh-banner-img" />
     </div>
   </div>
 </div>
 
 {{-- pink carousel --}}
 <div class="text-center  slider-grid">
   <div class="row mx-auto my-auto justify-content-center">
       <div id="recipeCarousel" class="carousel slide g-0" data-bs-ride="carousel">
           <div class="carousel-inner" role="listbox">
                 <div class="carousel-item active">
                   <div class="col-md-12">
                     <img src="{{asset('images/ewp1.png')}}" alt="" class="omh_tagline"/>
                   </div>
                 </div>
                 <div class="carousel-item">
                   <div class="col-md-12">
                     <img src="{{asset('images/ewp2.png')}}" alt="" class="omh_tagline"/>
                   </div>
                 </div>  
                 <div class="carousel-item">
                   <div class="col-md-12">
                     <img src="{{asset('images/ewp3.png')}}" alt="" class="omh_tagline"/>
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
  <!-- products -->
  <div class="omh-banner d-flex">
   <video autoplay muted loop id="" class="w-100">
     <source src="./images/ew_video4.mp4" type="video/mp4">
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
                      <source src="./images/ew_video3.mp4" type="video/mp4">
                    </video>
                    </div>
                  </div>
                  <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                      <img
                        src="{{asset('images/Artboard 28.png')}}"
                        alt=""
                        id="myVideoda" class="work-videos"
                      />
                    </div>
                  </div>
                  <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                      <img
                        src="{{asset('images/fifth.png')}}"
                        alt=""
                        id="myVideoda" class="work-videos"
                      />
                    </div>	
                  </div>
                  <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                      <img
                        src="{{asset('images/Artboard 18.png')}}"
                        alt=""
                        id="myVideoda" class="work-videos"
                      />
                    </div>
                  </div>
                  <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                      <img
                        src="{{asset('images/seventh.png')}}"
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
<a href="https://eyewinsome.us">
 <div class="mx-0 mx-md-5 my-5 px-md-5 px-0">
  <video autoplay muted loop id="" class="w-100">
    <source src="./images/ewss.mp4" type="video/mp4">
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