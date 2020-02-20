 <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
				<span class="pull-left">
				<h4><?php if(isset($pagetitle)) {echo $pagetitle;}?></h4>
				</span>
                <ul class="nav-header pull-right">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                                 
                            @if(Auth::user()->fileUpload1)
                                 
									<img src="{{URL::to(Auth::user()->fileUpload1)}}" width="40" alt="Avatar">
							
							@else
								
							<img src="{{ URL::asset('admin_assets/img/avatars/avatar10.jpg') }}" alt="Avatar"  width="40"/>
							
							@endif
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a tabindex="-1" href="{{ URL::to('broker/editBroker',['id' => Auth::user('id')]) }}">
                                        <i class="si si-user pull-right"></i>
                                       Profile
                                    </a>
                                </li>
                                
                                 
                                <li>
                                    <a tabindex="-1" href="{{ URL::to('logout') }}">
                                        <i class="si si-logout pull-right"></i>Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                </ul>
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                       <!-- <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button> -->
                    </li>
                    <li>
                        <!-- Opens the Apps modal found at the bottom of the page, before including JS code --> <!--
                        <button class="btn btn-default pull-right" data-toggle="modal" data-target="#apps-modal" type="button">
                            <i class="si si-grid"></i>
                        </button> -->
                    </li>
                     
                     
                </ul>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->