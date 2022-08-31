<x-layout>
<div class="container my-5 pt-5">
    <div class="flex-column-reverse flex-md-row row">
      <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12">
        <h1 class="challenge-heading">BOXLESS CHALLENGE 2022</h1>
    <h4 class="theme fontBold">THEME: PERFECT LIES</h4>
        <form class="mt-5">
          <div class="row g-0">
            <div class="col-12">
                <label for="exampleInputName" class="regLabel">NAME</label><br />
                <input
                  placeholder="Name"
                  type="text"
                  class="form-top inputFieldsReg mb-4"
                /><br />
            </div>
              
            <div class="col-12">
              <label for="exampleInputEmail regLabel" class="regLabel">EMAIL ADDRESS</label><br />
              <input
                placeholder="Email"
                type="email"
                class="inputFieldsReg mb-4"
              /><br />
            </div>
            <div class="col-12 col-md-12 col-xl-5">
              <label for="exampleInputPhone regLabel" class="regLabel">PHONE NUMBER</label>
              <input
                placeholder="Phone"
                type="number"
                class="inputFieldsReg mb-4"
              />
            </div>
            <div class="col-xl-1">

            </div>
            <div class="col-12 col-md-12 col-xl-6">
              <label for="exampleInputDob regLabel" class="regLabel">DATE OF BIRTH</label>
              <input
                placeholder=""
                type="date"
                class="inputFieldsReg mb-4"
              />
              <br />
            </div>
            <div>
              <label for="exampleInputProject regLabel" class="regLabel">TELL US ABOUT YOUR POSTER</label>
              <input
                placeholder="Tell us about your poster ..."
                type="text"
                class="inputFieldsReg mb-4"
              /><br />
            </div>
            <div class="form-check">
                <input
                  class="form-check-input shadow-none rounded-0"
                  type="checkbox"
                  id="flexCheckDefault"
                />
                <label class="form-check-label px-2" for="flexCheckDefault">
                  <small class="agree-small"
                    >I agree to the terms and conditions of Outcast Solutions
                    Boxless Challenge.</small
                  >
                </label>
                <br />
            </div>
          </div>

        </form>
        <div class="row">
          <div class="col-12">
        <a href="" class=" link">VIEW THE RULES OF THE CHALLENGE</a>
      </div>
      </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn upload-btn rounded-0 py-3 px-5" type="button">UPLOAD</button>
        </div>
      </div>
      <div class="col-xl-2 col-lg-3 col-md-2 col-sm-1">

      </div>
      <div class="col-xl-3 col-lg-4 col-md-4 file-div">
          <div class="text-center">
            <i class="fa-solid fa-camera fa-3x"></i>
            <h3 class="text-center px-4 upload-heading pt-3">UPLOAD YOUR FILE HERE</h3>
          </div>
      </div>
    </div>
  </div>

{{-- @include('layouts.footer') --}}
<x-footer />

</x-layout>