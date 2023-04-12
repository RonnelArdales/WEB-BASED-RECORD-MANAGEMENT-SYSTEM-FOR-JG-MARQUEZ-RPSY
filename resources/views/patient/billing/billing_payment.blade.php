@extends('layouts.navbar')
@section('content')
    
<div>
    <div style="background-color:#DDDDDD ; width:100%; height:150px" class="d-flex justify-content-center">
        <h3>no image</h3>
    </div>
    <div class="container" style="margin-top: 20px; margin-bottom:20px"> 
        Home >> <b>BOOK NOW</b>
    </div>

    @error('reference_no')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <div class="container">
        <div class="row"  >
            <p style="margin-bottom:5px"><b>Billing Process</b></p>
            <div class="rounded border border-dark col-sm-9 row" style=" padding:30px; margin:0px ">  
                <div class="col-sm "> 
                    <form action="/patient/billing/payment/store" method="post">
                        @csrf
                    <div class="form-group">
                        <label for="">Reference code:</label>
                        <input type="text" class="text-currency rounded text-gray-700 focus:outline-none border-b-4 border-gray-400 mg-5" style="background:#DDDDDD ; width:15vw" name="reference_no" id="date"><br>
                      </div>
    
                      <div class="form-group" style="">
                        <label class="mb-0 rounded bg-[#EDDBC0] mb-2 ml-3 " >ID:</label>  
                        <input class="view1 mname bg-[#EDDBC0] rounded text-gray-700 focus:outline-none border-b-4 border-gray-400" name="user_id" readonly value="{{Auth::user()->id}}"  type="text">
                       
                      </div>

                      <div class="form-group" style="">
                        <label class="mb-0 rounded bg-[#EDDBC0] mb-2 ml-3 " >Fullname:</label>  
                        <input class="view1 mname bg-[#EDDBC0] rounded text-gray-700 focus:outline-none border-b-4 border-gray-400" name="fullname" readonly value="{{{$info['fullname']}}}"  type="text">
                      
                      </div>

                      <div class="form-group" style="">
                        <label class="mb-0 rounded bg-[#EDDBC0] mb-2 ml-3 " >Mode of payment:</label>  
                        <input class="view1 mname bg-[#EDDBC0] rounded text-gray-700 focus:outline-none border-b-4 border-gray-400" name="mop" readonly value="{{{$info['modeofpayment']}}}"  type="text">
                      </div>
                      
                      <input type="text" value="{{{$info['servicecode']}}}" hidden  name="service_code">
                      <div class="form-group" style="">
                        <label class="mb-0 rounded bg-[#EDDBC0] mb-2 ml-3 " >Service:</label>  
                        <input class="view1 mname bg-[#EDDBC0] rounded text-gray-700 focus:outline-none border-b-4 border-gray-400"  name="service" value="{{{$info['service']}}}"  type="text">
                      </div>

                      <div class="form-group" style="">
                        <label class="mb-0 rounded bg-[#EDDBC0] mb-2 ml-3 " >Price:</label>  
                        <input class="view1 mname bg-[#EDDBC0] rounded text-gray-700 focus:outline-none border-b-4 border-gray-400" name="price" readonly value="{{{$info['price']}}}"  type="text">
                      </div>

                      <div class="form-group" style="">
                        <label class="mb-0 rounded bg-[#EDDBC0] mb-2 ml-3 " >Discount Type:</label>  
                        <input class="view1 mname bg-[#EDDBC0] rounded text-gray-700 focus:outline-none border-b-4 border-gray-400" name="discount" readonly value="{{{$info['discount']}}}"  type="text">
                      </div>
                      

                      <div class="form-group" style="">
                        <label class="mb-0 rounded bg-[#EDDBC0] mb-2 ml-3 " >Total:</label>  
                        <input class="view1 mname bg-[#EDDBC0] rounded text-gray-700 focus:outline-none border-b-4 border-gray-400" name="total" readonly value="{{{$info['total']}}}"  type="text">
                      </div>

                      <div class="form-group" style="">
                        <label class="mb-0 rounded bg-[#EDDBC0] mb-2 ml-3 " >Date:</label>  
                        <input class="view1 mname bg-[#EDDBC0] rounded text-gray-700 focus:outline-none border-b-4 border-gray-400" name="date" readonly value="{{{$info['date']}}}"  type="text">
                      </div>

                      <div class="form-group" style="">
                        <label class="mb-0 rounded bg-[#EDDBC0] ml-3 " >Time:</label>  
                        <input class="view1 mname bg-[#EDDBC0] rounded text-gray-700 focus:outline-none border-b-4 border-gray-400" name="time" id="view_fname" readonly value="{{{$info['time']}}}"  type="text">
                      </div>
                   

                      <div class="d-flex justify-content-center row" style="text-align: center; margin-top:20px">
                        {{-- <button type="button" class=" close " style="background: transparent; border-radius: 30px; color:#829460; border: 2px solid #829460;width: 110px;height: 37px; margin-right:20px " data-bs-dismiss="modal">Close</button> --}}
                        <a style=" background: transparent; line-height: 30px;;text-decoration:none;border-radius: 30px; color:#829460; border: 2px solid #829460;width: 110px;height: 37px; margin-right:20px "   href="/patient/appointment"> Cancel </a>
                        <button  type="submit" style="background: #829460;border-radius: 30px; color:white; border:#829460;width: 110px; height: 37px; ">Submit</button>
                      
                      </div>
                    </form>
                </div>
                <div class="col-sm mt-4 mt-sm-0 d-flex justify-content-center" >
           <img src="{{url('/logo/gcash.png')}}" style="border-radius:20px" width="300" height="300" alt="">
            </div>
            
      
        </div>   
            <div class="col-sm border border-dark" style="margin-left: 20px"  >
              
            
            </div>
        
        </div>
    </div>

</div>




@endsection