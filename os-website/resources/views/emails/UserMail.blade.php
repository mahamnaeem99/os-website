<!DOCTYPE html>
<html>
<head>
    <title>New Lead</title>
</head>
<body>
    {{-- <h1>{{ $details['title'] }}</h1> --}}
    <p>Dear BDM! </p>
    <p>New customer is interested in our services</p>
    <h5>Customer Detail</h5>
    <p><b>Customer Name: </b>{{$details['customer_name']}}</p>
    <p><b>Customer E-mail: </b>{{$details['email']}}</p>
    <p><b>Customer Contact Number: </b>{{$details['phone_number']}}</p>
    <p><b>Project details</b></p>
    <p>{{$details['project_details']}}</p>
    <p>This customer is interested in the following areas:</p>
   @foreach($details['area_of_interests'] as $interest)
    <p><b>{{$interest->service}}</b></p>
   @endforeach
    <p>Thank you</p>
</body>
<style>
/* .test-success{
    color: red;
} */
</style>
</html>