
<?php $__env->startSection('contents'); ?>

   <nav class="navbar navbar-default no-margin" style="background-color:#C70039">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header fixed-brand"  >

         <a  href="<?php echo e(url('home')); ?>" style="font-size: 1.1rem; font-weight: 700; font-family: Poppins; color:#ffff" class="d-none d-sm-block">Two Q Alliance Sdn. Bhd.</p>
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
               <a href="<?php echo e(url('home')); ?>"><span class="fa-stack fa-lg "><i class="fa fa-dashboard fa-stack-1x "></i></span> Home</a>
            </li>
            <li>
               <a href="<?php echo e(url('company')); ?>"><span class="fa-stack fa-lg "><i class="fa fa-building fa-stack-1x "></i></span>Company</a>
            </li>
         </ul>
      </div>
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <div id="page-content-wrapper">
         <div class="container-fluid xyz">
            <div class="row">
               <div class="col-lg-12">
                  <h1>Company <?php echo e($company->company_name); ?></h1>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-12" style="padding:20px;">
                <div class="card" style="padding-left:20px">
                    <div class="card-header"stye="float:right;"><a href="<?php echo e(URL::previous()); ?>" class="btn btn-secondary  mr-0 ml-auto" style="align:right;"> <i class="fas fa-arrow-left"></i> Go Back</a></div>
                        <?php echo csrf_field(); ?>

                        <label>Company Logo : <img src="<?php echo e(asset($company->company_logo)); ?>" width='100' height='100' class="img img-responsive"></label></br>
                        <label>Company Name : <a><?php echo e($company->company_name); ?></a></label></br>
                        <label>Company Email : <a><?php echo e($company->email); ?></a> </label></br>
                        <label>Company Website : <a href="<?php echo e($company->website_url); ?>"><?php echo e($company->website_url); ?></a></label></br>
                </div>
            </div>
            <div class="col-12" style="padding-left:20px; padding-right:20px;">
                
            </div>
        </div>
      </div>

   </div>
  


    

<?php echo $__env->make('layouthome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\twoq\resources\views/company/view.blade.php ENDPATH**/ ?>