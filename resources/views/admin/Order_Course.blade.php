@extends('admin.layouts.header')
@section('title','Order List')
@section('content-section')
{{--  
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Order List
    </div>
    <h3>Order Details</h3>
    <div>
       @php $i=1; @endphp
      @foreach($showoder as $s)
     <div class="row">
      
       <div class="col-md-5">

        <td>{{$i++}}</td>  
      <br>
                                
                                <span style="font-weight: 700; font-size: 18px;"> <span style="font-weight: 700; font-size: 18px;"> Customer First Name:</span> <span style="font-weight: 300;">{{$s->fname}}</span><br>
                                   <span style="font-weight: 700; font-size: 18px;"> Customer Last Name:</span> <span style="font-weight: 300;"> {{$s->lname}} </span><br>                               
                                   <span style="font-weight: 700; font-size: 18px;"> Customer Email:</span> <span style="font-weight: 300;"> {{$s->email}}</span><br>                                
                                   <span style="font-weight: 700; font-size: 18px;"> Customer Contact:</span> <span style="font-weight: 300;"> {{$s->phone}}  </span><br>                               
                                   <span style="font-weight: 700; font-size: 18px;"> Customer Address:</span> <span style="font-weight: 300;"> {{$s->address}} </span><br>                                
                                   {{-- <span style="font-weight: 700; font-size: 18px;"> Order Date:</span> <span style="font-weight: 300;"> {{$s->date}}  </span><br> -                               
                                  

                             </div>
                             
                                
                             <div class="col-md-5"> --}}
    
      

       {{--  <td>{{$i++}}</td> --}}
       {{--  <img src="{{asset('admin/bookimage')}}/{{$s->addbook->book_image}}" height="60" width="60"> --}}
     {{--  <br>
                                  
                                  <span style="font-weight: 700; font-size: 18px;">course Name:</span>  <span> {{$s->AddCourse->course_name}}</span><br>
                                  <span style="font-weight: 700; font-size: 18px;">course Publication:</span>  <span> {{$s->AddCourse->course_code}}</span><br>                                 
                                  <span style="font-weight: 700; font-size: 18px;">course Author:</span>  <span> {{$s->AddCourse->course_date}}</span><br>                                
                                  <span style="font-weight: 700; font-size: 18px;">course education:</span>  <span> {{$s->AddCourse->course_length}}</span><br>                                 
                                  <span style="font-weight: 700; font-size: 18px;">course Short Desc.</span>  <span> {{$s->AddCourse->course_price}}</span><br>                                 
                                  {{--<h4>Book long Desc. {{$s->addbook->book_longdescription}}</h4>                                 
                                  <span style="font-weight: 700; font-size: 18px;">Book Price:</span>  <span> {{$s->AddCourse->course_professor}}</span> <br>  

                             </div>
                                                    <div class="col-md-2">
                                  <h4>Book Images:</h4>  <br>                               

        <img style="border-radius: 20%;" src="{{asset('admin/courseimage')}}/{{$s->AddCourse->image}}" height="120" width="140">
      </div> 
                       
     </div>

     <hr>

    </div>
  </div>
</div>
</section> --}}


    {{-- <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>SN</th>
                                      <th>First Name</th>
                                      <th>Last Name</th>                                   
                                      <th>Email</th>                                                   
                                      <th>Contact</th>                      
                                      <th>Address</th>
                                      <th>Date</th>
                                      <th>Book Name</th>
                                      <th>Book Image</th> 
                                  </tr>
                              </thead>
                              <tbody>
                                @php $i=1 @endphp
                                @foreach($showoder as $s)
                                <tr>
                                  <td>{{$i++}}</td>
                                  <td>{{$s->first_name}}</td>
                                  <td>{{$s->last_name}}</td>                                 
                                  <td>{{$s->email}}</td>                                 
                                  <td>{{$s->contact}}</td>                                 
                                  <td>{{$s->address}}</td>                                 
                                  <td>{{$s->date}}</td>                                 
                                  <td></td>                                 
                                  <td><img src="{{asset('admin/bookimage')}}/" height="60" width="60"></td>                                 
                              </tr>
                              @endforeach
                              
                             
                              
                              
                          </tbody>
                      </table> --}}

                      <!-- start page content -->
      <div class="page-content-wrapper">
        <div class="page-content">
          <div class="page-bar">
            <div class="page-title-breadcrumb">
              <div class=" pull-left">
                <div class="page-title">Course Order Details </div>
              </div>
              <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                    href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="#">Tables</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Table With Data</li>
              </ol>
            </div>
          </div>

                     
          <div class="row">
            <div class="col-md-12">
              <div class="card card-box">
                <div class="card-head">                  
                  <header>Order Details</header>
                  <div class="tools">
                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                  </div>
                </div>
      @foreach($showoder as $s)
                <div class="card-body ">
                  <div class="table-scrollable">
 {{-- <table id="dataTable" class="display" style="width: 100%" >  --}}
         
  <h3>Order Details</h3>
       @php $i=1; @endphp
      <div class="col-md-5">

     <td>{{$i++}}</td>  
      <br>

                           
                                <span style="font-weight: 700; font-size: 18px;"> <span style="font-weight: 700; font-size: 18px;"> Customer First Name:</span> <span style="font-weight: 300;">{{$s->first_name}}</span><br>
                                   <span style="font-weight: 700; font-size: 18px;"> Customer Last Name:</span> <span style="font-weight: 300;"> {{$s->last_name}} </span><br>                               
                                   <span style="font-weight: 700; font-size: 18px;"> Customer Email:</span> <span style="font-weight: 300;"> {{$s->email}}</span><br>                                
                                   <span style="font-weight: 700; font-size: 18px;"> Customer Contact:</span> <span style="font-weight: 300;"> {{$s->phone}}  </span><br>                               
                                   <span style="font-weight: 700; font-size: 18px;"> Customer Address:</span> <span style="font-weight: 300;"> {{$s->address}} </span><br>                                
                                   {{-- <span style="font-weight: 700; font-size: 18px;"> Order Date:</span> <span style="font-weight: 300;"> {{$s->date}}  </span><br> --}}                               
                                  
           </div>
<br>

                                  <div class="col-md-5"> 
                                  
                                  <span style="font-weight: 700; font-size: 18px;">course Name:</span>  <span> {{$s->AddCourse->course_name}}</span><br>
                                  <span style="font-weight: 700; font-size: 18px;">course Publication:</span>  <span> {{$s->AddCourse->course_code}}</span><br>                                 
                                  <span style="font-weight: 700; font-size: 18px;">course Author:</span>  <span> {{$s->AddCourse->course_date}}</span><br>                                
                                  <span style="font-weight: 700; font-size: 18px;">course education:</span>  <span> {{$s->AddCourse->course_length}}</span><br>                                 
                                  <span style="font-weight: 700; font-size: 18px;">course Short Desc.</span>  <span> {{$s->AddCourse->course_price}}</span><br>                                 
                                  {{-- <h4>Book long Desc. {{$s->addbook->book_longdescription}}</h4> --}}                                 
                                  <span style="font-weight: 700; font-size: 18px;">Book Price:</span>  <span> {{$s->AddCourse->course_professor}}</span> <br>  

                             </div>
                                                    <div class="col-md-2">
                                  <h4>Course Images:</h4>  <br>                               

        <img style="border-radius: 20%;" src="{{asset('admin/courseimage')}}/{{$s->AddCourse->image}}" height="120" width="140">

                 </div>        

                {{-- </table>  --}}
                  </div>
                </div>
      @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end page content -->
      @endsection
