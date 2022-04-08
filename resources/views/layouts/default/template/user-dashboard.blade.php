@include('layouts.default.header')
 <div class="wrapper-page">
    <div class="content-page">
        <!-- Intro Section -->
        <style type="text/css">
        	.custom-color-a{
        		color: #1e455a !important;
        	}
        	.border-1{
        		background-color: #fff;
			    border: 1px solid #e0e0e0;
			    border-radius: 4px;
			    padding: 10px 0;
        	}
        	.nav-pills .nav-link.active{
        		background-color: #1e455a !important;
        		color: #ffffff !important;
        	}
        </style>

        <!-- Our Vision Section -->
        <div class="our-vision bg-light">
            <div class="gr-card-our-vision">
                <div class="container pt-5">
                    <div class="row">
					  	<div class="col-3">
						    <div class="nav flex-column nav-pills border-1" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						      	<a class="nav-link custom-color-a active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home" width="24" height="24" role="img" aria-label=""></i> Home</a>
						      	<a class="nav-link custom-color-a" id="v-pills-editresume-tab" data-toggle="pill" href="#v-pills-editresume" role="tab" aria-controls="v-pills-editresume" aria-selected="false"><i class="fa fa-file-word" width="24" height="24" role="img" aria-label=""></i> Edit Resume</a>
						      	<a class="nav-link custom-color-a" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
						      	<a class="nav-link custom-color-a" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
						    </div>
						</div>
					  	<div class="col-9">
						    <div class="tab-content border-1" id="v-pills-tabContent">
						      	<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
						      		
						      	</div>
						      	<div class="tab-pane fade p-4" id="v-pills-editresume" role="tabpanel" aria-labelledby="v-pills-profile-tab">
						      		@include('layouts.default.resume-edit')
						      	</div>
						      	<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
						      	<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
						    </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="back-top"> <a href="#top"><i class="fas fa-angle-up"></i></a> 
        </div>
        <!-- End Button Back Top -->
    </div>
</div>
    <!-- Content Page -->
@include('layouts.default.footer')