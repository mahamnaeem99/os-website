@extends('layouts.app')

@section('content')

{{--  --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAME</th>
                    <th scope="col">PHONE NUMBER</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">STATUS</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($leads as $lead)
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$lead->customer_name}}</td>
                    <td>{{$lead->phone_number}}</td>
                    <td>{{$lead->email}}</td>
                    <td class="d-flex">
                      <select class="form-select form-select-sm mb-3 select" aria-label=".form-select-lg example">
                      @foreach ($statuses as $status)
                        <option value="{{$status->id}}" {{$lead->status_id==$status->id ? 'selected' : ''}}>
                          {{$status->status}}
                        </option>
                      @endforeach
                      </select>
                      <button type="button" class="btn btn-success mx-3 btn-sm someButton" data-lead="{{$lead->id}}" >UPDATE</button>
                      <a href="{{url('/lead_detail')}}/{{$lead->id}}" class="my-1 eye">
                        <i class="fa fa-solid fa-eye"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</div> --}}
<div class="container">
<table id="example" class="display table table-striped table-bordered" style="width:100%">
  <thead>
      <tr>
          <th>NAME</th>
          <th>PHONE NUMBER</th>
          <th>EMAIL</th>
          <th>STATUS</th>
          <th class="w-25">ACTION</th>
      </tr>
  </thead>
  <tbody>
    @foreach ($leads as $lead)
    <tr>
      {{-- <th scope="row">1</th> --}}
      <td>{{$lead->customer_name}}</td>
      <td>{{$lead->phone_number}}</td>
      <td>{{$lead->email}}</td>
      {{-- <td class="d-flex"> 
        <select class="form-select form-select-sm mb-3 select" aria-label=".form-select-lg example">
        @foreach ($statuses as $status)
          <option value="{{$status->id}}" {{$lead->status_id==$status->id ? 'selected' : ''}}>
            {{$status->status}}
          </option>
        @endforeach
        </select>
        <button type="button" class="btn btn-success mx-3 btn-sm someButton" data-lead="{{$lead->id}}" >UPDATE</button>
        <a href="{{url('/lead_detail')}}/{{$lead->id}}" class="my-1 eye">
          <i class="fa fa-solid fa-eye"></i>
        </a>
      </td> --}}
      <td class="status">{{$lead->status->status}}</td>
      <td class="d-flex"> 
        <select class="form-select form-select-sm mb-3 select w-75" aria-label=".form-select-lg example" data-lead="{{$lead->id}}">
        @foreach ($statuses as $status)
          <option value="{{$status->id}}" {{$lead->status_id==$status->id ? 'selected' : ''}}>
            {{$status->status}}
          </option>
        @endforeach
        </select>
        {{-- <button type="button" class="btn btn-success mx-3 btn-sm someButton" data-lead="{{$lead->id}}" >UPDATE</button> --}}
        <a href="{{url('/lead_detail')}}/{{$lead->id}}" class="my-1 eye mx-4">
          <i class="fa fa-solid fa-eye"></i>
        </a>
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
 $('.someButton').click(function() { 
    var status_id=$(this).siblings('.select').val();
    var lead_id=$(this).attr("data-lead");
    $.get("{{url('/change_lead_status')}}/"+lead_id+ "/" +status_id, function(data, status)
    {
      alert("Status updated successfully");
    });
 });
$(document).ready(function () {                                     
  $('.select').on('change', function(){     
    var status_id=this.value;
    var lead_id=$(this).attr("data-lead");
    var abc=$(this).parent('td').siblings('.status');
     
    $.get("{{url('/change_lead_status')}}/"+lead_id+ "/" +status_id, function(data, status)
    {
      // alert("Status updated successfully");
      abc.html(data.status.status); 
    });
})
    // Setup - add a text input to each footer cell
    $('#example thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo('#example thead');
 
    var table = $('#example').DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        scrollY: '60vh',
        scrollCollapse: true,
       
        initComplete: function () {
            var api = this.api();
 
            // For each column
            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    var title = $(cell).text();
                    $(cell).html('<input type="text" placeholder="' + title + '" />');
 
                    // On every keypress in this input
                    $(
                        'input',
                        $('.filters th').eq($(api.column(colIdx).header()).index())
                    )
                    
                        .off('keyup change')
                        .on('change', function (e) {
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
 
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
                        })
                        .on('keyup', function (e) {
                            e.stopPropagation();
 
                            $(this).trigger('change');
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                                
                        });
                        
                });
                
        },   
    });
});


</script>
@endsection
{{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
  $('.someButton').click(function() { 
    var status_id=$(this).siblings('.select').val();
    var lead_id=$(this).attr("data-lead");
    $.get("{{url('/change_lead_status')}}/"+lead_id+ "/" +status_id, function(data, status)
    {
      alert("Status updated successfully");
    });
 });
 </script>   --}}
 {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
 {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script> --}}
 {{-- <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011-04-25</td>
      <td>$320,800</td>
  </tr>
  <tr>
      <td>Garrett Winters</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>63</td>
      <td>2011-07-25</td>
      <td>$170,750</td>
  </tr>
  <tr>
      <td>Ashton Cox</td>
      <td>Junior Technical Author</td>
      <td>San Francisco</td>
      <td>66</td>
      <td>2009-01-12</td>
      <td>$86,000</td>
  </tr>
  <tr>
      <td>Cedric Kelly</td>
      <td>Senior Javascript Developer</td>
      <td>Edinburgh</td>
      <td>22</td>
      <td>2012-03-29</td>
      <td>$433,060</td>
  </tr>
  <tr>
      <td>Airi Satou</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>33</td>
      <td>2008-11-28</td>
      <td>$162,700</td>
  </tr>
  <tr>
      <td>Brielle Williamson</td>
      <td>Integration Specialist</td>
      <td>New York</td>
      <td>61</td>
      <td>2012-12-02</td>
      <td>$372,000</td>
  </tr>
  <tr>
      <td>Herrod Chandler</td>
      <td>Sales Assistant</td>
      <td>San Francisco</td>
      <td>59</td>
      <td>2012-08-06</td>
      <td>$137,500</td>
  </tr>
  <tr>
      <td>Rhona Davidson</td>
      <td>Integration Specialist</td>
      <td>Tokyo</td>
      <td>55</td>
      <td>2010-10-14</td>
      <td>$327,900</td>
  </tr>
  <tr>
      <td>Colleen Hurst</td>
      <td>Javascript Developer</td>
      <td>San Francisco</td>
      <td>39</td>
      <td>2009-09-15</td>
      <td>$205,500</td>
  </tr>
  <tr>
      <td>Sonya Frost</td>
      <td>Software Engineer</td>
      <td>Edinburgh</td>
      <td>23</td>
      <td>2008-12-13</td>
      <td>$103,600</td>
  </tr>
  <tr>
      <td>Jena Gaines</td>
      <td>Office Manager</td>
      <td>London</td>
      <td>30</td>
      <td>2008-12-19</td>
      <td>$90,560</td>
  </tr>
  <tr>
      <td>Quinn Flynn</td>
      <td>Support Lead</td>
      <td>Edinburgh</td>
      <td>22</td>
      <td>2013-03-03</td>
      <td>$342,000</td>
  </tr>
  <tr>
      <td>Charde Marshall</td>
      <td>Regional Director</td>
      <td>San Francisco</td>
      <td>36</td>
      <td>2008-10-16</td>
      <td>$470,600</td>
  </tr>
  <tr>
      <td>Haley Kennedy</td>
      <td>Senior Marketing Designer</td>
      <td>London</td>
      <td>43</td>
      <td>2012-12-18</td>
      <td>$313,500</td>
  </tr>
  <tr>
      <td>Tatyana Fitzpatrick</td>
      <td>Regional Director</td>
      <td>London</td>
      <td>19</td>
      <td>2010-03-17</td>
      <td>$385,750</td>
  </tr>
  <tr>
      <td>Michael Silva</td>
      <td>Marketing Designer</td>
      <td>London</td>
      <td>66</td>
      <td>2012-11-27</td>
      <td>$198,500</td>
  </tr>
  <tr>
      <td>Paul Byrd</td>
      <td>Chief Financial Officer (CFO)</td>
      <td>New York</td>
      <td>64</td>
      <td>2010-06-09</td>
      <td>$725,000</td>
  </tr>
  <tr>
      <td>Gloria Little</td>
      <td>Systems Administrator</td>
      <td>New York</td>
      <td>59</td>
      <td>2009-04-10</td>
      <td>$237,500</td>
  </tr>
  <tr>
      <td>Bradley Greer</td>
      <td>Software Engineer</td>
      <td>London</td>
      <td>41</td>
      <td>2012-10-13</td>
      <td>$132,000</td>
  </tr>
  <tr>
    <td>Bradley Greer</td>
    <td>Software Engineer</td>
    <td>London</td>
    <td>41</td>
    <td>2012-10-13</td>
    <td>$132,000</td>
</tr>
<tr>
  <td>Bradley Greer</td>
  <td>Software Engineer</td>
  <td>London</td>
  <td>41</td>
  <td>2012-10-13</td>
  <td>$132,000</td>
</tr>
<tr>
  <td>Bradley Greer</td>
  <td>Software Engineer</td>
  <td>London</td>
  <td>41</td>
  <td>2012-10-13</td>
  <td>$132,000</td>
</tr>
<tr>
  <td>Bradley Greer</td>
  <td>Software Engineer</td>
  <td>London</td>
  <td>41</td>
  <td>2012-10-13</td>
  <td>$132,000</td>
</tr>
<tr>
  <td>Bradley Greer</td>
  <td>Software Engineer</td>
  <td>London</td>
  <td>41</td>
  <td>2012-10-13</td>
  <td>$132,000</td>
</tr>
<tr>
  <td>Bradley Greer</td>
  <td>Software Engineer</td>
  <td>London</td>
  <td>41</td>
  <td>2012-10-13</td>
  <td>$132,000</td>
</tr>
<tr>
  <td>Bradley Greer</td>
  <td>Software Engineer</td>
  <td>London</td>
  <td>41</td>
  <td>2012-10-13</td>
  <td>$132,000</td>
</tr>
<tr>
  <td>Bradley Greer</td>
  <td>Software Engineer</td>
  <td>London</td>
  <td>41</td>
  <td>2012-10-13</td>
  <td>$132,000</td>
</tr>
<tr>
  <td>Bradley Greer</td>
  <td>Software Engineer</td>
  <td>London</td>
  <td>41</td>
  <td>2012-10-13</td>
  <td>$132,000</td>
</tr>
<tr>
  <td>Bradley Greer</td>
  <td>Software Engineer</td>
  <td>London</td>
  <td>41</td>
  <td>2012-10-13</td>
  <td>$132,000</td>
</tr>
<tr>
  <td>Bradley Greer</td>
  <td>Software Engineer</td>
  <td>London</td>
  <td>41</td>
  <td>2012-10-13</td>
  <td>$132,000</td>
</tr>
<tr>
  <td>Bradley Greer</td>
  <td>Software Engineer</td>
  <td>London</td>
  <td>41</td>
  <td>2012-10-13</td>
  <td>$132,000</td>
</tr>
<tr>
  <td>Bradley Greer</td>
  <td>Software Engineer</td>
  <td>London</td>
  <td>41</td>
  <td>2012-10-13</td>
  <td>$132,000</td>
</tr>
<tr>
  <td>Bradley Greer</td>
  <td>Software Engineer</td>
  <td>London</td>
  <td>41</td>
  <td>2012-10-13</td>
  <td>$132,000</td>
</tr>
<tr>
  <td>Bradley Greer</td>
  <td>Software Engineer</td>
  <td>London</td>
  <td>41</td>
  <td>2012-10-13</td>
  <td>$132,000</td>
</tr>
<tr>
  <td>Bradley Greer</td>
  <td>Software Engineer</td>
  <td>London</td>
  <td>41</td>
  <td>2012-10-13</td>
  <td>$132,000</td>
</tr> --}}





