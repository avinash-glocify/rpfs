@extends("companies.company_app")
@section("content")
 <!-- Page Header -->
 
                <div class="content bg-image overflow-hidden" style="background-image: url('{{ URL::asset('admin_assets/img/photos/bg.jpg') }}');">
                    <div class="push-50-t push-15">
					   <?php 
					      $user=Auth::user()->usertype;
						  
					   ?>
                        <h1 class="h2 text-white animated zoomIn">Dashboard</h1>
                        <h2 class="h5 text-white-op animated zoomIn">Welcome <?php echo $user;?> </h2>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Stats -->
                <div class="content content-narrow" >
                   <div class="row">

                      
                        
                    </div>
                </div>
                <!-- END Stats -->

                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                       
                    </div>
                     
                </div>
                <!-- END Page Content -->

@endsection