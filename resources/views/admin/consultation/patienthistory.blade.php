@extends('layouts.admin_navigation')

@section('content')
<style>
  label{
      font-family: 'Poppins';
  }
      .addtocart_input, .service_input{
      background: #D0B894;
      border-radius: 10px;
      border:none;
      margin-bottom: 1%;
      text-align: center; 
  }

</style>
  <div class="row m-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"  >
                   
                        <div class="card-header" style="text-align: center; ">
                            <h3 class="card-title">Patient Record</h3>
                        </div>
                        <div class="card-body mt-3">
                            <div class="" style="background:#EDDBC0; padding: 20px 30px ;border-left:12px solid white; border-radius: 5px;box-shadow:  4px 4px 2px rgba(0, 0, 0, 0.25)">
                                Patient name: <label style="font-size: 23px" for=""><b> {{$userinfo->fname}} {{$userinfo->lname}}</b></label>
                            </div>

                            <div class="row mt-3" style="padding-left:15px " >
                                <div class="rounded    row col-md" style="height:420px; margin:0px;padding-top:10px ; margin-right:18px ;background: #EDDBC0;
                                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); ">  
                                    <div class="col-sm " >
                                     <label style="font-size:  20px" for=""><b>Basic Information:</b> </label>
                                    <hr style="margin-top:10px">
                                    
                                    <label style="font-size: 13px;" for="">Address:</label><br>
                                    <label style="font-family: 'Poppins';font-style: normal; font-size:18px"  for="">{{$userinfo->address}} </label><br>

                                    <label style="font-size: 13px; margin-top:8px" for="">Age:</label><br>
                                    <label style="font-size: 18px" for="">{{$userinfo->age}} </label><br>

                                    <label style="font-size: 13px;  margin-top:8px" for="">Gender:</label><br>
                                    <label style="font-size: 18px" for="">{{$userinfo->gender}} </label><br>

                                    <label style="font-size: 13px;  margin-top:8px" for="">Contact no:</label><br>
                                    <label style="font-size: 18px" for="">{{$userinfo->mobileno}} </label><br>
                                     
                                    <label style="font-size: 13px; margin-top:8px" for="">Email:</label><br>
                                    <label style="font-size: 18px" for="">{{$userinfo->email}}</label><br>

                                    <label style="font-size: 13px; margin-top:8px" for="">Last appointment:</label><br>
                                    <label style="font-size: 18px" for="">{{ date('M d, Y ', strtotime($last->date))}}</label><br>
                                    {{-- {{$last->date->format('M d, Y')}} --}}
                                          <div class="d-flex justify-content-center row" style="text-align: center; margin-top:20px">
                                          
                                        
                                          </div>
                                    </div>
                    
                    
                                
                          
                            </div>
                            <div class="col-md-8" style="margin-right:15px;border-radius: 5px; padding:0px; box-shadow: 1px 4px 4px rgba(0, 0, 0, 0.25); background: #EDDBC0">
                                <div style="margin-top:5px; margin-left:10px">
                                    <a href="/admin/consultation"><img height="20" width="20" src="{{url('logo/arrow.png')}}" alt=""></a>
                                    <hr style="margin-top: 5px;">
                                </div>

                                <div class="d-flex justify-content-center row" style="text-align: center; margin-top:15px">
                                          <label style="font-size:  20px" for=""><b> Appointment History</b></label>
                                        
                                </div>
                                <table class="table table-bordered table-striped"  id="consultation" style="background-color: white; width:100%; " >
                                    <thead>
                                      <tr>
                                        <th>id</th>
                                        <th>Service</th>
                                        <th>Date</th>
                                        <th style="min-width: 55px">Action</th>
                                    
                                      </tr>
                                    </thead>
                                    <tbody class="error">
                                        @foreach ($consultations as $consult)
                                        <tr class="overflow-auto">
                                            <td>{{$consult->id}}</td>
                                          <td>{{$consult->service}}</td>
                                            <td>{{$consult->date}}</td>
                                            <td>{{$consult->time}}</td>
                                 
                
                                            <td style="text-align: center">
                                                <a href="/admin/consultation/viewconsultation/{{$consult->id}}/{{$consult->user_id}}" class=" btn btn-sm btn-info">View</a>
                                                <a href="/admin/consultation/edit/{{$consult->id}}/{{$consult->user_id}}" class=" btn btn-sm btn-primary">Edit</a>
                                                <a href="/admin/consultation/delete/{{$consult->id}}" class=" btn btn-sm btn-danger">Delete</a>
                                    </td> 
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
                        </div>
                   
                </div>                    
        </div>

  
    </div>
                   

    @section('scripts')
    <script>
        $(document).ready(function() {
    
        })
    </script>
    @endsection



  

@endsection