@extends('layouthome')
@section('contents')

   <nav class="navbar navbar-default no-margin" style="background-color:#C70039">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header fixed-brand"  >

         <a  href="#" style="font-size: 1.1rem; font-weight: 700; font-family: Poppins; color:#ffff" class="d-none d-sm-block">Two Q Alliance Sdn. Bhd.</p>
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
               <a href="#"><span class="fa-stack fa-lg "><i class="fa fa-building fa-stack-1x "></i></span>Company</a>
            </li>
         </ul>
      </div>
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <div id="page-content-wrapper">
         <div class="container-fluid xyz">
            <div class="row">
               <div class="col-lg-12">
                  <h1>Company Details</h1>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
        <div class="row">
        <div class="col-12" style="padding-left:20px; padding-right:20px;">
        <a href="{{ url('/company/create') }}" class="btn btn-secondary btn-md" style="float:right;" title="company"> Add New Company</a>
        </div>
            <div class="col-12" style="padding:20px;">
                <div class="card">
                    <div class="card-header">Company List Details</div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <!-- <th>#</th> -->
                                <th>Company Logo</th>
                                <th>Company Name</th>
                                <th>Company Email</th>
                                <th>Company Website</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        </thead>
                        <tbody>
                        @php( $company = \App\Models\Company::paginate(3) ) 
                        @if(!empty($company) && $company->count())
                        @foreach($company as $key => $item)
                            <tr>
                                <!-- <td>{{  $loop->iteration  }}</td> -->
                                <td><img src="{{  asset($item->company_logo)}}" width='50' height='50' class="img img-responsive"></td>
                                <td>{{  $item->company_name  }}</td>
                                <td>{{  $item->email  }}</td>
                                <td><a href="{{  $item->website_url  }}"> {{  $item->website_url  }}</td>
                                <td>        
                                            <a href="{{ url('/company/view' .'/'. $item->id) }}" title="View Company Details"><button class="btn btn-info "><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/company/edit' .'/'. $item->id) }}" title="Edit Student"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
  
                                            <form method="POST" action="{{ route('company.destroy' , $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            @method('DELETE')
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            </form>
                                 </td>
                            </tr>
                        @endforeach
                        @else
                           <tr>
                              <td colspan="6">The Are No Data.</td>
                           </tr>
                        @endif
                        
                        </tbody>

                    </table>
                     {!! $company->links() !!}
                </div>
            </div>
        </div>
      </div>
   </div>
  


    
