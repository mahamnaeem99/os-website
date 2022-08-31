{{-- Navbar --}}
<x-layout>

<!-- SECTION-1  -->
<div class="contact-div">
  <div class="col-11 col-lg-5 col-md-6 col-sm-8 col-xl-4 text-center py-5 my-5">
    <p class="lets-chat text-center hfs">LET'S CHAT</p>
    <div class="col-12 col-md-12 text-center">
    <p class="lets-chat-para subbfs">
      We are here for the briefs that want to do things differently. If you
      are trying to shake up your industry or challenge the status quo, then
      drop us a note to talk about how we can help.
    </p>
</div>
  </div>
</div>
  <!-- SECTION-2 -->
  <div class="container mt-xl-5 pt-xl-5 mt-3 pt-0">
    <div class="d-flex align-items-center justify-content-center w-100">
      <div class="contact-form mb-5">
        
        <form method="POST" action="{{url('/leadform')}}">
            @csrf
          <label for="exampleInputName" class="regLabel mt-4">NAME</label><br />
          <input
            placeholder="Name"
            type="text"
            name="customer_name"
            class="form-top inputFields inputFieldsReg"
            
          />
          @error('customer_name')
            <span class="text-danger">{{ $message }}</span>
          @enderror
          <br />

          <label for="exampleInputEmail" class="regLabel mt-4">EMAIL ADDRESS</label><br />
          <input
            placeholder="Email"
            type="email"
            name="email"
            class="inputFields inputFieldsReg"
            
          />
          @error('email')
            <span class="text-danger">{{ $message }}</span>
          @enderror<br />
          <label for="exampleInputPhone" class="regLabel mt-4">PHONE NUMBER</label><br />
          <input
            placeholder="Phone"
            type="number"
            name="phone_number"
            class="inputFields inputFieldsReg"
            
          />
          @error('phone_number')
            <span class="text-danger">{{ $message }}</span>
          @enderror<br />
       
          <label for="exampleInputProject" class="regLabel mt-4">TELL US ABOUT THE PROJECT</label>
          <input
            placeholder="Tell us a little about your dream project…"
            type="text"
            name="project_details"
            class="inputFields inputFieldsReg"
           
          /><br />
          
          <p class="fontDarkGrey fw-bold mt-4">Services, you’d like to use</p>

          <div class="row ml-2 py-2">
            @foreach ($services as $service)
            <div class="col-xl-4 col-md-5 col-sm-6 col-12 my-2">
              <div class="form-check">
                <input
                  class="form-check-input shadow-none rounded-0"
                  type="checkbox"
                  id="flexCheckDefault" 
                  name="interests[]"
                  value="{{$service->id}}"
                />
                <label class="form-check-label px-2" for="flexCheckDefault">
                  <small>{{$service->service}}</small>
                </label>
              </div>
            </div>
            @endforeach
            {{-- <div class="col-xl-4 col-md-4 col-sm-12 col-12">
              <div class="form-check">
                <input
                  class="form-check-input shadow-none rounded-0"
                  type="checkbox"
                  id="flexCheckDefault" 
                  name="interests[]"
                  value="Print Design"
                />
                <label class="form-check-label px-2" for="flexCheckDefault">
                  <small>PRINT DESIGN</small>
                </label>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12 col-12">
              <div class="form-check">
                <input
                  class="form-check-input shadow-none rounded-0"
                  type="checkbox"
                  id="flexCheckDefault" 
                  name="interests[]"
                  value="Packaging"
                />
                <label class="form-check-label px-2" for="flexCheckDefault">
                  <small>PACKAGING</small>
                </label>
              </div>
            </div> --}}
          </div>

          {{-- <div class="row ml-2 py-2">
            <div class="col-xl-4 col-md-4 col-sm-12 col-12">
              <div class="form-check">
                <input
                  class="form-check-input shadow-none rounded-0"
                  type="checkbox"
                  id="flexCheckDefault" 
                  name="interests[]"
                  value="Social Media Marketing"
                />
                <label class="form-check-label px-2" for="flexCheckDefault">
                  <small>SOCIAL MEDIA MARKETING</small>
                </label>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12 col-12">
              <div class="form-check">
                <input
                  class="form-check-input shadow-none rounded-0"
                  type="checkbox"
                  id="flexCheckDefault" 
                  name="interests[]"
                  value="Website Design"
                />
                <label class="form-check-label px-2" for="flexCheckDefault">
                  <small>WEBSITE DESIGN</small>
                </label>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12 col-12">
              <div class="form-check">
                <input
                  class="form-check-input shadow-none rounded-0"
                  type="checkbox"
                  id="flexCheckDefault" 
                  name="interests[]"
                  value="Content & Strategy"
                />
                <label class="form-check-label px-2" for="flexCheckDefault">
                  <small>CONTENT & STRATEGY</small>
                </label>
              </div>
            </div>
          </div>
          <div class="row ml-2 py-2">
            <div class="col-xl-4 col-md-4 col-sm-12 col-12">
              <div class="form-check">
                <input
                  class="form-check-input shadow-none rounded-0"
                  type="checkbox"
                  id="flexCheckDefault" 
                  name="interests[]"
                  value="Mobile Apps"
                />
                <label class="form-check-label px-2" for="flexCheckDefault">
                  <small>MOBILE APPS</small>
                </label>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12 col-12">
              <div class="form-check">
                <input
                  class="form-check-input shadow-none rounded-0"
                  type="checkbox"
                  id="flexCheckDefault" 
                  name="interests[]"
                  value="Software"
                />
                <label class="form-check-label px-2" for="flexCheckDefault">
                  <small>SOFTWARE</small>
                </label>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12 col-12">
              <div class="form-check">
                <input
                  class="form-check-input shadow-none rounded-0"
                  type="checkbox"
                  id="flexCheckDefault" 
                  name="interests[]"
                  value="Website Development"
                />
                <label class="form-check-label px-2" for="flexCheckDefault">
                  <small>WEBSITE DEVELOPMENT</small>
                </label>
              </div>
            </div>
          </div>
          <div class="row ml-2 py-2">
            <div class="col-xl-4 col-md-4 col-sm-12 col-12">
              <div class="form-check">
                <input
                  class="form-check-input shadow-none rounded-0"
                  type="checkbox"
                  id="flexCheckDefault" 
                  name="interests[]"
                  value="Hosting & Security"
                />
                <label class="form-check-label px-2" for="flexCheckDefault">
                  <small>HOSTING & SECURITY</small>
                </label>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12 col-12">
              <div class="form-check">
                <input
                  class="form-check-input shadow-none rounded-0"
                  type="checkbox"
                  id="flexCheckDefault" 
                  name="interests[]"
                  value="Enterprise Solutions"
                />
                <label class="form-check-label px-2" for="flexCheckDefault">
                  <small>ENTERPRISE SOLUTIONS</small>
                </label>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12 col-12">
              <div class="form-check">
                <input
                  class="form-check-input shadow-none rounded-0"
                  type="checkbox"
                  id="flexCheckDefault" 
                  name="interests[]"
                  value="Quality Assurance"
                />
                <label class="form-check-label px-2" for="flexCheckDefault">
                  <small>QUALITY ASSURANCE</small>
                </label>
              </div>
            </div>
          </div> --}}
        

        <p class="pt-3 fontDarkGrey fw-bold">Perhaps you want to schedule a call, pick a time 
          according to your convenience. Or just hit send.
        </p>
        <label for="exampleInputProject" class="regLabel"></label>
        <input
          placeholder="Select time"
          type="datetime-local"
          name="contact_time"
          class="inputFields mb-4 inputFieldsReg"
          id="time"
          
        /><br />
        {{-- Success message --}}
        @if(!empty($success))
          <div class="bg-dark success-msg my-3 py-2 text-center">
            {{$success}}
              <button type="button" class="btn-close btn-white close float-end me-3 success-msg-close" data-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="/services">
            <button class="button-selector me-2 border-0">
              <img src="{{asset('images/schedule_grey.png')}}" alt="" class="schedule-btn">
            </button>
          </a>
          {{-- <button class="btn me-md-2 schedule-btn rounded-0 px-4 py-3" type="button" onclick="openModal()">SCHEDULE A CALL</button> --}}
          {{-- <button class="btn call-btn rounded-0 px-4 py-3" type="submit">SEND</button> --}}
          <a href="/services">
            <button class="button-selector border-0">
              <img src="{{asset('images/send_grey.png')}}" alt="" class="send-btn">
            </button>
          </a>
        </div>
      </form>
      </div>
    </div>
  </div>

  {{-- Footer --}}
  <x-footer />

  <script>
    function openModal(e){
      e.preventDefault();
      document.getElementById("time").style.display= "block";
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script type="text/javascript">
//     $('.button-selector').click(function(){
//    window.location.href='/services';
// })
  $(".schedule-btn").mouseover(function () {
    $(this).attr('src','../images/OS Schedule Button.gif');
    timer = setTimeout(() => {
      $(this).attr('src','../images/schedule_yellow.png');
    }, 1000);
        }).mouseout(function () {
$(this).attr('src', '../images/schedule_grey.png');
});
    $(".send-btn").mouseover(function () {
    $(this).attr('src','../images/OS Send Button.gif');
    timer = setTimeout(() => {
      $(this).attr('src','../images/send_yellow.png');
    }, 1000);
        }).mouseout(function () {
$(this).attr('src', '../images/send_grey.png');
});
        ;

  </script>
{{-- @include('layouts.footer') --}}
</x-layout>