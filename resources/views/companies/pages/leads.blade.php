@extends("companies.company_app")
@section("content")

<!-- Page Header --><?php /*
<div class="content bg-image" style="background-image: url('{{ URL::asset('admin_assets/img/photos/bg.jpg') }}');">
	<div class="push-50-t push-15 clearfix">
		<div class="push-15-r pull-left animated fadeIn">
			
			@if(Auth::user()->fileUpload1)
			
			<img src="{{URL::to(Auth::user()->fileUpload1)}}" alt="Avatar" class="img-avatar img-avatar-thumb">
			
			@else
			
			<img src="{{ URL::asset('admin_assets/img/avatars/avatar10.jpg') }}" alt="Avatar"  class="img-avatar img-avatar-thumb"/>
			
			@endif
		</div>
		<h1 class="h2 text-white push-5-t animated zoomIn">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h1>
		<h2 class="h5 text-white-op animated zoomIn">{{ Auth::user()->usertype }}</h2>
	</div>
</div> */?>
<!-- END Page Header -->



<!-- Page Content -->
<div class="content content-boxed">
	<div class="row">
		<h3>Prospects List</h3>
		<div class="col-sm-12 col-lg-12">
			
			<!-- Block Tabs Alternative Style -->
			<div class="block">
				<div class="block-content tab-content">
					
					
					<div class="col-lg-12 tab-pane active" id="btabs-alt-static-profile">
						
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
						@if(Session::has('flash_message'))
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							{{ Session::get('flash_message') }}
						</div>
						@endif
						
						
						<div class="row" >
							<table id="example" class="display" style="width:100%">
								<thead>
									<tr>
										<th>SrNo</th>
										<th>Name</th>
										<th>Email</th>
										<th>Service Type</th>
										<th>Created at</th>
										<th></th>
										<!--<th>Status</th>
										<th></th>
										<th></th>
										<th></th>-->
										
									</tr>
								</thead>
								<tbody>
								   <?php //$i = 0; $skipped = $getAllleads->currentPage() * $getAllleads->perPage();
								   $i = 1;
								    if(!empty($getAllleads) && isset($getAllleads)){
                                    foreach ($getAllleads as $key=>$c) {
									
								   ?>
									@if($c->notification==1)
									<tr style="background-color:#262323;color:white">
										<td>{{$i++}}</td>
										<td>{{ $c->first_name}}</td>
										<td>{{ $c->email_address}}</td>
										<td>{{ $c->service_type}}</td>
										<td>{{ $c->created_at}}</td>
										
										<td><a href="{{ url('company/viewLead', ['id' => $c->id]) }}">View</a></td>
									</tr>
									@else
									  <tr>
										<td>{{$i++}}</td>
										<td>{{ $c->first_name}}</td>
										<td>{{ $c->email_address}}</td>
										<td>{{ $c->service_type}}</td>
										<td>{{ $c->created_at}}</td>
										
										<td><a href="{{ url('company/viewLead', ['id' => $c->id]) }}">View</a></td>
									</tr>	
									@endif	
									<?php } } else{  ?>
 								
       								<?php } ?>
									
								</tbody>
								
							</table>
						</div>	
						
						
						
					</div>
					
				</div>
			</div>
			<!-- END Block Tabs Alternative Style -->
		</div>
		
	</div>
</div>
<!-- END Page Content -->


<div class="modal fade" id="history" role="dialog">
    <div class="modal-dialog">
		
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Assign History</h4>
			</div>
			<div class="modal-body">
				<table class="assign_history">
					<thead>
						<tr>
							<th>Company Name</th>
							<th>Ratings</th>
							<th> </th>
						</tr>
					</thead>
					<tbody id="str_rat_html">
						<tr id="loadingImage" ><td style="text-align:center;" colspan=3><img src="/admin_assets/img/loading.gif" alt="loading" ></td></tr>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="submit" onclick="return saveAssignedLead();" class="btn btn-default">Submit</button>
			</div>
		</div>
		
	</div>
</div>

@endsection