<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- use linkes start -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We">


    
  
<!-- use links end -->



<!-- <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;800&display=swap"
    /> -->

    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
  </head>
  <body>
    <div class="header">
      <nav
        class="
          navbar navbar-expand-lg
          transparent-nav
          justify-content-between
          px-4 fixed-top
        "
      >
          <a href="/">
          <img
            src="{{ asset('images/Outcast new logo-05.png')}}"
            width=""
            height="40"
            alt=""
        /></a>
        
        <a href="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling">
        <div class="fw-bold">
          MENU
          <button
            class="menu-btn fw-bold ms-md-3 ms-0"
            {{-- data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" --}}
            type="button"
            {{-- aria-controls="offcanvasScrolling" --}}
          >
            <img class="nav-toggle" src="{{ asset('images/Path 2.png')}}" alt="">
            <!-- > -->
          </button>
        </div>
      </a>
      </nav>
      <div
        class="offcanvas offcanvas-start outcastNavbar w-100 d-flex"
        data-bs-scroll="true"
        data-bs-backdrop="false"
        tabindex="-1"
        id="offcanvasScrolling"
        aria-labelledby="offcanvasScrollingLabel"
      >
        <div class="offcanvas-header me-end ms-auto">
          <button
            type="button"
            class="btn-close text-reset"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
          ></button>
        </div>
        <div class="offcanvas-body p-0 p-md-4 align-items-center pr-5 row mt-md-5">
          <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6">
            
          </div>
          <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 d-flex justify-content-center">
            <ul class="navbar-nav mr-auto">
              
              <div class="">
                <li class="nav-item active py-2 col-xl-4">
                  <a href="{{url('/work')}}">
                    WORK
                  </a>
                </li>
              </div>
              
              
              <li class="nav-item py-2">
                <a href="{{url('/about')}}">
                ABOUT
              </a>
              </li>
    
              <li
                class="nav-item py-2"
              >
              <a href="/services">
                SERVICES
              </a>
              </li>

              <li
                class="nav-item py-2" 
              >
              <a href="/boxless_register">
                BOXLESS
              </a>
              </li>
              <li
                class="nav-item py-2"
              >
              <a href="/contact">
                CONTACT
              </a>
              </li>
  
              <p class="fontGrey">info@outcastsolutions.us</p>
              <p class="fontGrey">+92 21 34610041</p>
              <div class="d-flex social-media-links">
                <a href="https://www.facebook.com/outcastsol" class="me-4">-Fb</a>
                <a href="https://www.instagram.com/outcastsol/" class="me-4">-Ig</a>
                <a href="https://twitter.com/outcastsol" class="me-4">-Tw</a>
                <a href="https://www.linkedin.com/company/outcastsol/" class="me-4">-Li</a>
                <a href="https://www.youtube.com/channel/UCUzWe2JEqdRK5Hn9t2Q2emw/about" class="me-4">-Yt</a>
              </div>
              
            </ul>
          </div>
        </div>
      </div>

    </div>
    <main>
        {{$slot}}
    </main>
     {{-- @yield('content') --}}
     
    </body>
    </html>