
@extends('layouts.app')
@section('content')

{{-- <p>{{$comments}}</p> --}}

{{-- <div class="details">
    <div class="container-fluid mx-5">
      
        <div class="row">
          <div class="col-md-5 border rounded g-0">
            <div class="head">
              <h2 class="px-5 py-2">User Details</h2>
            </div>
            <div class="px-5 pt-2 pb-1 d-flex align-items-baseline">
              <h5>Name:</h5>
              <p class="">{{$leads->customer_name}}</p>
            </div> 
            <div class="px-5 pt-2 pb-1">
              <h5>Email:</h5>
              <p>{{$leads->email}}</p>
            </div>
            <div class="px-5 pt-2 pb-1">
              <h5>Phone Number:</h5>
              <p>{{$leads->phone_number}}</p>
            </div>
            <div class="px-5 pt-2 pb-1">
              <h5>Area of interests</h5>
              @foreach ($leads->service as $service)
              <p>{{$service->service}}</p>
              @endforeach
            
            </div>
          </div>
          <div class="col-md-1">

          </div>
          <div class="col-md-6 border rounded g-0">
            <div class="head">
              <h2 class="px-5 py-2">Add Comment</h2>
            </div>
          </div>
        </div>
    </div>
</div> --}}

<!-- Main Body -->
<div class="row">
  <div class="col-md-2 abs">
    <div class="card border-0 abs">
      <h3 class="px-4 pt-3 fw-bold">User Details</h3>
      <div class="px-4 pt-2 pb-1">
        <h5 class="grey">Name:</h5>
        <p class="">{{$leads->customer_name}}</p>
      </div> 
      <div class="px-4 pt-2 pb-1">
        <h5>Email:</h5>
        <p>{{$leads->email}}</p>
      </div>
      <div class="px-4 pt-2 pb-1">
        <h5>Phone Number:</h5>
        <p>{{$leads->phone_number}}</p>
      </div>
      <div class="px-4 pt-2 pb-1">
        <h5>Area of interests</h5>
       @foreach ($leads->service as $service)
          <ul>
            <li>
             {{$service->service}}
            </li>
          </ul>
        @endforeach
      </div>
      <div class="px-4 pt-2 pb-1">
        <h5>Project Details:</h5>
        <p>{{$leads->project_details}}</p>
      </div>  
   </div>
  </div>
  <div class="col-md-10">
    <div class="row chat">
      <div class="card border-0 card-2">
        <div class="mx-0" id="parent">
          <h3 class="px-5 pt-3 fw-bold">Comments</h3>
          {{-- <p>{{$comments}}</p> --}}
          @foreach ($comments as $comment)
          <div class="row py-2 g-0">
            <div class="col-12 px-5">
              <div class="card bgGrey post">
                {{-- @foreach ($comment->user as $user) --}}
                  <div class="post-heading">
                      <div class="float-left meta">
                          <div class="title h5 pt-4 px-3">
                              <b>{{$comment->user->name}}</b>
                              <span> {{$comment->created_at->format('d-m-Y h:i a')}}</span>
                          </div>
                      </div>
                  </div> 
                  {{-- @endforeach --}}
                  <div class="post-description px-3"> 
                      <p>{{$comment->details}}</p>
                  </div>
              </div>     {{-- card end --}}
            </div>  {{-- col end --}}
          </div>
          @endforeach {{-- row end --}}
         
  </div>{{-- container --}}
  </div>  {{-- card end --}}
  </div>
    <div class="row my-3">
      <div class="col-md-11 g-0">
        <div class="form-floating">
          <input type="text" hidden value="{{$leads->id}}" id="leadId" />
            <textarea
            class="form-control"
            placeholder="Leave a comment here"
            id="comment"
          ></textarea>
          <label for="floatingTextarea">Comments</label>
        </div>
      </div>
      <div class="col-md-1">
        <button class="btn btn-primary btn-lg commentAdd" type="button">Submit</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-2"></div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
  $('.commentAdd').click(function() { 
    // alert("hio");
    var lead_id=$("#leadId").val();
    var comment=$("#comment").val();
    if($("#comment").val() == ""){
        alert("Please Enter Comment First !");
    }
    else{
      alert("Comment added !")
      //post call
      $.post("{{url('/add_comment')}}",
    {
    _token: "{{ csrf_token() }}",
    lead_id: lead_id,
    details: comment
  },
  function(data, status){
    console.log(data);
    var add = `<div class="row py-2 g-0">
          <div class="col-12 px-5">
           <div class="card bgGrey post">
                <div class="post-heading">
                    <div class="float-left meta">
                        <div class="title h5 pt-4 px-3">
                            <b>${data.user.name}</b>
                            <span> - ${moment(data.created_at).utc(+5).format('DD-MM-YYYY   hh:mm a')}</span>
                         </div>
                     </div>
                 </div> 
              <div class="post-description px-3"> 
                    <p>${data.details}</p>
              </div>  
           </div>
        </div>  
       </div>`
  //   commentSection.innerHTML += add;
  $("#parent").append(add);
  $("#comment").val('');
  });


 

  }});
 </script> 
@endsection

{{-- <script> --}}

  {{-- // function addComment(){
  //   var newDiv = document.createElement("div");
  //   newDiv.className+='row'

    
  //   var inputValue = document.getElementById("comment").value;
  //   var newp = document.createElement('span');
  //   newp.innerHTML = inputValue;

  //   newDiv.appendChild(newp);
  //   document.getElementById('parent').appendChild(newDiv);
  // }

function comment (){
  // var userComment = document.getElementById('comment').value;
  // var leadId = document.getElementById('leadId').value;
  // alert(userComment);
  // var commentSection = document.getElementById('parent');
  // var add = `<div class="row py-2 g-0">
  //         <div class="col-12 px-5">
  //           <div class="card bgGrey post">
  //               <div class="post-heading">
  //                   <div class="float-left meta">
  //                       <div class="title h5 pt-4 px-3">
  //                           <b>John Doe</b>
  //                           <span> - 20 October, 2022</span>
  //                       </div>
  //                   </div>
  //               </div> 
  //               <div class="post-description px-3"> 
  //                   <p>${userComment}</p>
    
  //               </div>
  //           </div>
  //         </div>  
  //       </div>`
  //       commentSection.innerHTML += add;
  //       document.getElementById("comment").value = "";

        
  //       const data=[userComment,leadId];
  //       // alert (data);
  //       fetch('/add_comment', {
  //         method:'POST',
  //         headers: {
  //               'Content-Type': 'application/json',
  //               },
  //               body: JSON.stringify(data),
  //           })
  //               .then((response) => response.json())
  //             //Then with the data from the response in JSON...
  //               .then((data) => {
  //               console.log('Success:', data);
  //           })
  //           //Then with the error genereted...
  //               .catch((error) => {
  //               console.error('Error:', error);
  //           });
        
}
// $("commentAdd").click(function(){
//   $.post("{{url('/add_comment')}}", function(data, status){
//     alert("Data: " + data + "\nStatus: " + status);
//   });
// }); --}}
{{-- </script> --}}

{{-- <div class="">
  <button class="py-2 add-comment-btn fw-bold border-0 px-3">Add Comment</button>
</div> --}}
{{-- <div class="float-end mx-1 mt-3">
    <button class="py-2 add-comment-btn fw-bold border-0 px-3">Add Comment</button>
  </div> --}}

{{-- <h3>Email:</h3>
    <p>{{$leads->email}}</p>
<h3>Phone Number:</h3>
<p>{{$leads->phone_number}}</p>

<h3>Area of interests</h3>
<p>{{$leads->service}}</p> --}}
{{-- <div class="row mt-3 g-0 footer">
  <div class="col-12">
    <div class="card border-0 comment-card">
      <form id="">
        <div class="form-group">
          <h4 class="px-5 pt-3 fw-bold">Leave a comment</h4>
          <label for="message" class="px-5">Message</label>
          <div class="row align-items-center py-3">
          <div class="col-md-8 col-sm-6 col-12">
            <textarea name="msg" id="comment" msg cols="30" rows="1" class="form-control ms-5"></textarea>
          </div>
          
          <div class="col-md-3 col-sm-6 col-12 float-end mx-1">
            <button class="py-2 add-comment-btn fw-bold border-0 px-3" onclick="addComment()">Add Comment</button>
          </div>
        </div>
      </div>
      </form>
    </div> 
  </div>
</div> --}}