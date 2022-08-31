<x-layout>

<!-- omh banner -->
<div class="omh-banner omh_tagline_web mt-5">
    <img src="{{asset('images/dmain.png')}}" class="dealsabad-img" />
</div>
<div class="mt-5 omh-banner omh_tagline_mobile">
  <img src="{{asset('images/dmainmob.png')}}" class="omh_tagline" />
</div>

  <div class="">
    <div class="row g-0 justify-content-between mt-0">
        <div class="col-lg-6 col-md-5 col-xl-5 d-flex flex-column justify-content-center mx-md-0 mx-xl-5 px-3 px-lg-5 px-md-3 py-md-0 my-lg-0 my-5">
            <p class="fw-bold yellow-text brands-hfs mb-0">DEALSABAAD</p>
            <div class="">
                <p class="brand-description brands-pfs">
                  DealsAbaad is a digital real estate marketing 
                  platform that provides customers with the most 
                  reasonable and trustworthy real estate deals in 
                  Pakistan. The aim is to provide confidence and 
                  integrity to people to trust this industry.             

                </p>
            </div>

            <div class="pt-md-5 pt-3">
            <h4 class="yellow-text fw-bold brands-hfs mb-0">WHAT WE DID</h4>
            <p class="mb-0 brand-description brands-pfs">Social Media Marketing</p>
            </div>
        </div> 

        <div class="col-md-6 d-flex justify-content-center">
          <div class="omh_tagline_web">
            <img src="{{asset('images/dside.png')}}" class="omh-img" />
          </div>
          {{-- mob view --}}
          <div class="omh_tagline_mobile">
            <img src="{{asset('images/dsidemob.png')}}" class="omh_tagline" />
           </div>

        </div>
    </div> 
</div>

<div class="omh_tagline_web">
  <img src="{{asset('images/dealsbaad post mockup.png')}}" class="omh_tagline" />
</div>
{{-- mobile view --}}
<div class="omh_tagline_mobile">
 <img src="{{asset('images/d3mob.png')}}" class="omh_tagline" />
</div>

  {{--  --}}
<!-- SECTION -->
<!-- <section id="slider" class="py-5 my-md-3 my-0  my-0 da-slider">
  <div class="container">
	  <div class="slider">
				<div class="owl-carousel">
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
              <video autoplay muted loop id="myVideoda" class="work-videos">
              <source src="./images/da1.mp4" type="video/mp4">
            </video>
						</div>
					</div>
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
              <video autoplay muted loop id="myVideoda" class="work-videos">
              <source src="./images/da3.mp4" type="video/mp4">
            </video>
						</div>	
					</div>
					<div class="slider-card">
						<div class="d-flex justify-content-center align-items-center mb-4">
              <video autoplay muted loop id="myVideoda" class="work-videos">
              <source src="./images/da2.mp4" type="video/mp4">
            </video>
						</div>
					</div>
				</div>
			</div>
  </div>
</section> -->
<section id="slider" class="py-md-5 py-3 da-slider">
      <div class="container">
       <div class="slider">
            <div class="owl-carousel">
              <div class="slider-card">
                <div class="d-flex justify-content-center align-items-center mb-4">
                  <video autoplay muted loop id="myVideoda" class="work-videos">
                    <source src="./images/da1.mp4" type="video/mp4">
                  </video>
                </div>
              </div>
              <div class="slider-card">
                <div class="d-flex justify-content-center align-items-center mb-4">
                <video autoplay muted loop id="myVideoda" class="work-videos">
                    <source src="./images/da3.mp4" type="video/mp4">
                  </video>
                </div>	
              </div>
              <div class="slider-card">
                <div class="d-flex justify-content-center align-items-center mb-4">
                <video autoplay muted loop id="myVideoda" class="work-videos">
                    <source src="./images/da2.mp4" type="video/mp4">
                  </video>
                </div>
              </div>
              <div class="slider-card">
                <div class="d-flex justify-content-center align-items-center mb-4">
                <video autoplay muted loop id="myVideoda" class="work-videos">
                    <source src="./images/da2.mp4" type="video/mp4">
                  </video>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
 
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
      autoplay:true,
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