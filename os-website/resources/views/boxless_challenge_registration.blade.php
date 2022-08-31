<x-layout>
<!-- SECTION -->
<div class="boxless_video">
    <video autoplay muted loop id="myVideo">
      <source src="{{asset('images/boxless.mp4')}}" type="video/mp4">
    </video>
    </div>

    <!-- SECTION -->
    <div class="align-items-center boxless-section d-flex flex-column justify-content-center">
      <div class="heading-sec pt-5">
        <h1 class="boxless-heading text-center fs-1">WHAT IS BOXLESS?</h1>
      </div>

      <div class="container">
        <p class="col-xl-6 col-lg-8 col-md-8 col-sm-11 col-12 boxless-para fontBold text-center mx-auto">
        The competition is open for all graphic designers enabling them to
        showcase their work and be a part of a bigger network. The
        Outcastsolutions we have taken an innitiative to promote the creators
        and their ideas globally. We created Boxless, to encourange people to
        work within a creative community and gain recognition. The purpose of
        boxless is to let your imagination wander, motivate you to think out
        of the box with no restrictions none whatsoever. Go big with your
        ideas and see where they lead you.
        </p>
      </div>
  </div>

  <!-- SECTION -->
  {{-- <h1 class="text-center criteria-heading pt-5">MOST RECENT UPLOADS</h1>
 <!-- Start Slider -->
<section id= "slider" class="align-items-center container d-flex">
  <!-- Start Slider Checked -->
  <input type= "radio" name="slider" id= "slide-1-radio" checked />
  <input type= "radio" name="slider" id= "slide-2-radio" />
  <input type= "radio" name="slider" id= "slide-3-radio" />
  <!-- End Slider Checked -->

  <!-- Start Slides -->
  <div class= "align-items-center d-flex position-relative slides">
    <div class= "slide">
      <img src= "{{asset('images/Artboard 1.png')}}" alt="slide-1" class="img" />
    </div>
    <div class= "slide">
      <img src= "{{asset('images/Artboard 1.png')}}" alt="slide-1" class="img" />
    </div>
    <div class= "slide">
      <img src= "{{asset('images/Artboard 1.png')}}" alt="slide-1" class="img" />
    </div>
  </div>
  <!-- End Slides -->

  <!-- Start Slider Control -->

  <!-- Start Prevese Arrow -->
  <div class="arrow my-auto position-absolute prev-arrow">
    <label for= "slide-1-radio" id= "prev-1-arrow">
      <i class= "fa fa-arrow-left"></i>
      <span class= "thumb">
        <img src= "{{asset('images/Artboard 1.png')}}" alt="slide-1-thumb" class="img"/>
      </span>
    </label>
    <label for= "slide-2-radio" id= "prev-2-arrow">
      <i class= "fa fa-arrow-left"></i>
      <span class= "thumb">
        <img src= "{{asset('images/Artboard 1.png')}}" alt="slide-2-thumb" class="img" />
      </span>
    </label>
    <label for= "slide-3-radio" id= "prev-3-arrow">
      <i class= "fa fa-arrow-left"></i>
      <span class= "thumb">
        <img src= "{{asset('images/Artboard 1.png')}}" alt="slide-3-thumb" class="img" />
      </span>
    </label>
  </div>
  <!-- Start Prevese Arrow -->

  <!-- Start next Arrow -->
  <div class="arrow next-arrow position-absolute">
    <label for= "slide-1-radio" id= "next-1-arrow">
      <i class= "fa fa-arrow-right"></i>
      <span class="thumb">
       <img src="{{asset('images/Artboard 1.png')}}" alt="slide-1-thumb" class="img" />
     </span>
    </label>
    <label for="slide-2-radio" id= "next-2-arrow">
      <i class= "fa fa-arrow-right"></i>
      <span class= "thumb">
      <img src="{{asset('images/Artboard 1.png')}}" alt="slide-2-thumb" class="img" />
     </span>
    </label>
    <label for= "slide-3-radio" id= "next-3-arrow">
      <i class= "fa fa-arrow-right"></i>
      <span class= "thumb">
          <img src="{{asset('images/Artboard 1.png')}}" alt="slide-3-thumb" class="img" />
     </span>
    </label>
  </div>
  <!-- Start next Arrow -->
  <!-- End Slider Control -->
</section> --}}
<!-- End Slider -->

  <!-- SECTION -->
  <div class="container-fluid why-enter-section">
    <div class="py-5">
      <h1 class="why-enter-heading text-center pt-5">WHY ENTER?</h1>
      <div class="container">
        <p class="col-xl-7 col-lg-8 col-md-8 col-sm-11 col-12 mx-auto why-enter-para text-center">
          BOXLESS provides a platform for all the creative minds to showcase
          their talents and make them get recognized globally. The TOP 10
          poster entries will be displayed on the Outcast Solutions website
          and will be saved in the archive, the work will gain recognition and
          will be appreciated by the community now that you’ve read till here
          means you my friend have some hidden talent so wait no more and hand
          your talent to us for a chance!
        </p>
      </div>
      <h1 class="why-enter-heading text-center">REGISTRATIONS ARE NOT LIVE YET!</h1>
      {{-- <h1 class="why-enter-heading text-center">REGISTRATION</h1>
      <p class="text-center">Register now to get brief</p> --}}
      {{-- <div class="container">
        <div
          class="d-flex align-items-center justify-content-center py-3"
        >
          <div class="contact-form mx-auto">
            <form>
              <label for="exampleInputName">NAME</label><br />
              <input
                placeholder="Name"
                type="text"
                name="name"
                class="form-top inputFieldsRegister mb-4"
              />
              @error('name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
              <br />

              <label for="exampleInputEmail">EMAIL ADDRESS</label><br />
              <input
                placeholder="Email"
                type="text"
                name="email"
                class="inputFieldsRegister mb-4"
              />
              @error('email')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
              <br />

              <label for="exampleInputPhone">PHONE NUMBER</label><br />
              <input
                placeholder="Phone number"
                type="number"
                name="phone_number"
                class="inputFieldsRegister mb-4"
              />
              @error('phone_number')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
              <br />
              <div class="">
                <button class="btn btn-register rounded-0 px-5 py-3 d-flex mx-auto" type="button">REGISTER</button>
              </div>
             
            </form>
          </div>
        </div>
      </div> --}}
    </div>
  </div>

    <!-- SECTION -->
    <h1 class="text-center criteria-heading pt-5">CRITERIA</h1>
    <div class="container">
      <p class="col-12 col-lg-9 col-md-10 col-sm-12 col-sm-8 col-xl-7 container text-center criteria-para">
        We are here for the briefs that want to do things differently. If you
        are trying to shake up your industry or challenge the status quo, then
        drop us a note to talk about how we can help.
      </p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-md-1 col-lg-2"></div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
          <h3 class="criteria-headings">ELIGIBILITY</h3>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
          <p>
            We are here for the briefs that want to do things differently. If
            you are trying to shake up your industry or challenge the status
            quo, then drop us a note to talk about how we can help.
          </p>
        </div>
        <div class="col-xl-1 col-md-1 col-lg-1"></div>
      </div>

      <div class="row my-4">
        <div class="col-xl-2 col-md-1 col-lg-2"></div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
          <h3 class="criteria-headings">USAGE OF THE ARTWORK</h3>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
          <p>
            We are here for the briefs that want to do things differently. If
            you are trying to shake up your industry or challenge the status
            quo, then drop us a note to talk about how we can help.
          </p>
        </div>
        <div class="col-xl-1 col-md-1 col-lg-1"></div>
      </div>

      <div class="row my-4">
        <div class="col-xl-2 col-md-1 col-lg-2"></div>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
          <h3 class="criteria-headings">COPYRIGHTS</h3>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
          <p>
            We are here for the briefs that want to do things differently. If
            you are trying to shake up your industry or challenge the status
            quo, then drop us a note to talk about how we can help.
          </p>
        </div>
        <div class="col-xl-1 col-md-1 col-lg-1"></div>
      </div>
    </div>

    <!-- SECTION -->
    <h1 class="text-center criteria-heading">JURY MEMBERS</h1>
    <div class="container-fluid">
      <div class="no-gutters d-flex flex-wrap justify-content-center">
        <div class="ourTeamSection">
          <div
            class="card rounded-0 d-flex align-items-center justify-content-center"
          >
            <img src="{{asset('images/test.jpg')}}" class="card-img-top" alt="" />
          </div>
          <div class="card-body">
            <h5 class="card-title text-center orange">Jessica Richland</h5>
            <p class="card-text text-center subtextColor">
              Accountant Coordinator
            </p>
          </div>
        </div>
        <div class="ourTeamSection">
          <div
            class="card rounded-0 d-flex align-items-center justify-content-center"
          >
            <img src="{{asset('images/test.jpg')}}" class="card-img-top" alt="" />
          </div>
          <div class="card-body">
            <h5 class="card-title text-center orange">Jessica Richland</h5>
            <p class="card-text text-center subtextColor">
              Accountant Coordinator
            </p>
          </div>
        </div>
        <div class="ourTeamSection">
          <div
            class="card rounded-0 d-flex align-items-center justify-content-center"
          >
            <img src="{{asset('images/test.jpg')}}" class="card-img-top" alt="" />
          </div>
          <div class="card-body">
            <h5 class="card-title text-center orange">Jessica Richland</h5>
            <p class="card-text text-center subtextColor">
              Accountant Coordinator
            </p>
          </div>
        </div>
        <div class="ourTeamSection">
          <div
            class="card rounded-0 d-flex align-items-center justify-content-center"
          >
            <img src="{{asset('images/test.jpg')}}" class="card-img-top" alt="" />
          </div>
          <div class="card-body">
            <h5 class="card-title text-center orange">Jessica Richland</h5>
            <p class="card-text text-center subtextColor">
              Accountant Coordinator
            </p>
          </div>
        </div>
        <div class="ourTeamSection">
          <div
            class="card rounded-0 d-flex align-items-center justify-content-center"
          >
            <img src="{{asset('images/test.jpg')}}" class="card-img-top" alt="" />
          </div>
          <div class="card-body">
            <h5 class="card-title text-center orange">Jessica Richland</h5>
            <p class="card-text text-center subtextColor">
              Accountant Coordinator
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- SECTION -->
    <h1 class="text-center criteria-heading pt-5">TIMELINE</h2>
    <p class="text-center">Dates and events are subject to change.</p>
   
    <div class="container my-5">
      <div class="d-flex align-items-sm-center justify-content-center flex-sm-row flex-column mt-4 ms-5">
        <div class="me-5 flex-sm-column flex-row align-items-sm-start align-items-center">
          <p class="timeline-headings fs-1 fw-bold mb-0">12/05</p>
          <p class="fs-5 fw-bold mb-0">2022</p>
        </div>
        <div class="">
          <p class="fs-3 fw-bold mb-0 timeline-text">CALL FOR ENTRIES</p>
          <p class="">Dates and events are subject to change.</p>
        </div>
      
      
      </div>
      <div class="d-flex align-items-sm-center justify-content-center flex-sm-row flex-column mt-4 ms-5">
        <div class="me-5 flex-sm-column flex-row align-items-sm-start align-items-center">
          <p class="timeline-headings fs-1 fw-bold mb-0">12/05</p>
          <p class="fs-5 fw-bold mb-0">2022</p>
        </div>
        <div class="">
          <p class="fs-3 fw-bold mb-0 timeline-text">CALL FOR ENTRIES</p>
          <p class="">Dates and events are subject to change.</p>
        </div>
      
      
      </div>
      <div class="d-flex align-items-sm-center justify-content-center flex-sm-row flex-column mt-4 ms-5">
        <div class="me-5 flex-sm-column flex-row align-items-sm-start align-items-center">
          <p class="timeline-headings fs-1 fw-bold mb-0">12/05</p>
          <p class="fs-5 fw-bold mb-0">2022</p>
        </div>
        <div class="">
          <p class="fs-3 fw-bold mb-0 timeline-text">CALL FOR ENTRIES</p>
          <p class="">Dates and events are subject to change.</p>
        </div>
      
      
      </div>
      <div class="d-flex align-items-sm-center justify-content-center flex-sm-row flex-column mt-4 ms-5">
        <div class="me-5 flex-sm-column flex-row align-items-sm-start align-items-center">
          <p class="timeline-headings fs-1 fw-bold mb-0">12/05</p>
          <p class="fs-5 fw-bold mb-0">2022</p>
        </div>
        <div class="">
          <p class="fs-3 fw-bold mb-0 timeline-text">CALL FOR ENTRIES</p>
          <p class="">Dates and events are subject to change.</p>
        </div>
      </div>
      <div class="d-flex align-items-sm-center justify-content-center flex-sm-row flex-column mt-4 ms-5">
        <div class="me-5 flex-sm-column flex-row align-items-sm-start align-items-center">
          <p class="timeline-headings fs-1 fw-bold mb-0">12/05</p>
          <p class="fs-5 fw-bold mb-0">2022</p>
        </div>
        <div class="">
          <p class="fs-3 fw-bold mb-0 timeline-text">CALL FOR ENTRIES</p>
          <p class="">Dates and events are subject to change.</p>
        </div>
      </div>
      <div class="d-flex align-items-sm-center justify-content-center flex-sm-row flex-column mt-4 ms-5">
        <div class="me-5 flex-sm-column flex-row align-items-sm-start align-items-center">
          <p class="timeline-headings fs-1 fw-bold mb-0">12/05</p>
          <p class="fs-5 fw-bold mb-0">2022</p>
        </div>
        <div class="">
          <p class="fs-3 fw-bold mb-0 timeline-text">CALL FOR ENTRIES</p>
          <p class="">Dates and events are subject to change.</p>
        </div>
      </div>  
    </div>

    <script>
        var swiper = new Swiper(".mySwiper", {
          effect: "coverflow",
          grabCursor: false,
          centeredSlides: false,
          slidesPerView: "3",
          // loop:true,
          autoplay:false,
          coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
          },
        });
      </script>

{{-- @include('layouts.footer') --}}
<x-footer />

    </x-layout>