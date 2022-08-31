 @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
  
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
  
@if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    Please check the form below for errors
</div>
@endif 


{{-- 
@if(session()->has('message'))
<div
  class="bg-dark text-success">
  <p>
    {{session('message')}}
  </p>
</div>
@endif --}}


{{-- @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif --}}


{{-- @if(session()->has('message'))
        <div id="session-message" class="notification is-success" role="alert">
            {{ session('message') }}
        </div>
 @endif --}}