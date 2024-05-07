@extends('layouthome')
@section('contents')

   <nav class="navbar navbar-default no-margin" style="background-color:#C70039">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header fixed-brand"  >

         <a  href="{{url('home')}}" style="font-size: 1.1rem; font-weight: 700; font-family: Poppins; color:#ffff" class="d-none d-sm-block">Two Q Alliance Sdn. Bhd.</p>
      </div>
      <!-- navbar-header-->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
            <li class="active">
               <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
               </button>
            </li>
         </ul>
      </div>
      <!-- bs-example-navbar-collapse-1 -->
   </nav>
   <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
         <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
            <li class="active">
               <a href="{{url('home')}}"><span class="fa-stack fa-lg "><i class="fa fa-dashboard fa-stack-1x "></i></span> Home</a>
            </li>
            <li>
               <a href="{{url('company')}}"><span class="fa-stack fa-lg "><i class="fa fa-building fa-stack-1x "></i></span>Company</a>
            </li>
         </ul>
      </div>
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <div id="page-content-wrapper">
         <div class="container-fluid xyz">
            <div class="row">
               <div class="col-lg-12">
                  <h1>Edit Company Details</h1>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-12" style="padding:20px;">
                <div class="card">
                    <div class="card-header"><h4>Company Information</h4><a href="{{ URL::previous() }}" class="btn btn-secondary  " style="align:right;"> <i class="fas fa-arrow-left"></i> Go Back</a></div>
               
                    <form style="padding-left:20px;" action="{{ url('update/'.$company->id) }}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" id="id" value="{{$company->id}}" id="id"/>
                        <label>Company Name</label></br>
                        <input type="text" name="company_name" value="{{$company->company_name}}" id="company_name" class="form-control" required autofocus></br>
                        <label>Company Email</label></br>
                        <input type="email" value="{{$company->email}}" name="email" id="email" class="form-control" required autofocus></br>
                        <label>Company Logo</label></br>
                        <input type="file" name="company_logo" id="company_logo"  class="form-control" required></br>
                        <img src="{{  asset($company->company_logo)}}" width='50' height='50' class="img img-responsive">
                        <label>Company Website</label></br>
                        <input type="text" value="{{$company->website_url}}" name="website_url" id="website_url" class="form-control" required autofocus></br>
                        <div class="col-12" style="padding-left:20px; padding-right:20px;">
                        <button type="submit" class="btn btn-success d-block mr-0 ml-auto" value="Update">Update Company Details</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12" style="padding-left:20px; padding-right:20px;">
                
            </div>
        </div>
      </div>

   </div>
  


    
