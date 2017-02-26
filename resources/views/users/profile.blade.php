@extends('layouts.app')
@section('title')
	User Profile
@endsection
@section('content')
	<div class="content-page">
  <!-- ============================================================== -->
  <!-- Start Content here -->
  <!-- ============================================================== -->
         
        
<div class="profile-banner" style="background-image: url(images/stock/1epgUO0.jpg);">
	<div class="col-sm-3 avatar-container">
		<img src="/img/9RV89U9KlWABGqIg.png" class="img-circle profile-avatar" alt="User avatar">
	</div>	
</div>
<div class="content">

				<div class="row">
					<div class="col-sm-3">
						<!-- Begin user profile -->
						<div class="text-center user-profile-2">
							<h4>Howdy, <b> hayatu </b></h4>																											
								<!-- User button -->							
						</div><!-- End div .box-info -->
						<!-- Begin user profile -->
					</div><!-- End div .col-sm-4 -->
					
					<div class="col-sm-9">
						<div class="widget widget-tabbed">
							<!-- Nav tab -->
							<ul class="nav nav-tabs nav-justified">							 
							  <li class="active"><a href="#about" data-toggle="tab" aria-expanded="true"><i class="fa fa-user"></i> About</a></li>							  
							</ul>
							<!-- End nav tab -->

							<!-- Tab panes -->
							<div class="tab-content">																							
								
								<!-- Tab about -->
								<div class="tab-pane animated fadeInRight active" id="about">
									<div class="user-profile-content">										
										<div class="row">
											<div class="col-sm-6">
												<h5><strong>CONTACT</strong> ME</h5>													
													<address>
														<strong>Email</strong><br>
														<p> hayatu89@live.com </p>
													</address>													
											</div>
											<div class="col-sm-6">
												<h5><strong>My Role</strong> user </h5>												
											</div>
										</div><!-- End div .row -->
									</div><!-- End div .user-profile-content -->
								</div><!-- End div .tab-pane -->
								<!-- End Tab about -->																								
							</div><!-- End div .tab-content -->
						</div><!-- End div .box-info -->
					</div>
				</div>								            	
            </div>       
    </div>
@endsection