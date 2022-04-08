@include('layouts.default.header')
 <div class="wrapper-page">
    <div class="content-page">
        <div class="page-breadcrumb d-flex h-100 " style="@if(empty($job->banner)) background-image: url({{url('/')}}/uploads/images/banner/{{ $breadcum->image }}); @else background-image: url({{url('/')}}/uploads/images/circular/{{ $job->banner }}); @endif">
            <div class="container align-self-center w-100">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="content-page-breadcrumb text-center">
                            <div class="title-page-breadcrumb">
                                <h1>{{ $title }}</h1>
                            </div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item" >Jobs</li>
                                <li class="breadcrumb-item" >{{ $job->title }}</li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="services p-0">
	        <div class="title-page text-center animated-Fade-In-Up-1">
	          <div class="container">
	            <div class="row">
	            	<div class="col-md-8">
	            		<div class="card">
						  	<div class="card-header bg-info text-light text-left">
						    	<i class="fas fa-file-alt"></i> Submit application online
						  	</div>
						  	<div class="card-body">
						    	<form class="" action="" method="post">
						    		<div class="form-group row">
									    <label for="staticEmail" class="col-sm-3 col-form-label text-left">Account Name</label>
									    <div class="col-sm-9">
									      <input type="text" name="account_email" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
									    </div>
									</div>
									<div class="form-group row">
									    <label for="" class="col-sm-3 col-form-label text-left">Position Applied</label>
									    <div class="col-sm-9">
									      <input type="text" name="position_applyed" readonly class="form-control-plaintext" id="position_applyed" value="{{ $job->title }}">
									    </div>
									</div>
									<div class="form-group row">
									    <label for="" class="col-sm-3 col-form-label text-left">Salary Range</label>
									    <div class="col-sm-9">
									      <input type="text" name="salary_range" readonly class="form-control-plaintext" id="salary_range" value="{{ $job->salary }}">
									    </div>
									</div>
									<div class="form-group row">
									    <label for="" class="col-sm-3 col-form-label text-left">Expected Salary</label>
									    <div class="col-sm-9">
									      <input type="text" name="expected_salary" class="form-control" id="expected_salary" value="" placeholder="eg: 50000" required="">
									    </div>
									</div>
									<div class="form-check row">
										<div class="col-md-12 text-left">
											<input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
								    		<label class="form-check-label" for="exampleCheck1">By clicking this you are agree with our <a href="">Terms & Conditions</a>.</label>
										</div>
								  	</div>
								  	<div class="row">
								  		<div class="col-md-12">
								  			<hr>
								  		</div>
								  	</div>
								  	<div class="row">
								  		<div class="col-md-12 text-left">
								  			<button type="submit" class="btn btn-primary bg-info" >Sign in</button>
								  			<button type="submit" class="btn btn-primary bg-secondary">Cancel</button>
								  		</div>
								  	</div>
						    	</form>
						  	</div>
						</div>
	            	</div>
	            	<div class="col-md-4">
	            		<div class="card">
						  	<div class="card-header bg-info text-light text-left">
						    	<i class="fas fa-user-graduate"></i> Related Job
						  	</div>
						  	<div class="card-body row">
						    	<div class="col-md-12">
						    		@foreach($relatedjob as $row)
					              		<a href="{{ route('jobs.details', $row->id) }}" style="text-decoration: none;">
						              		<div class="card card-services p-3 box-shado text-center animated-Fade-In-{{ $loop->iteration }}">
							                    <div class="card-body p-0 text-left">
							                    	<div class="row">
							                    		<div class="col-md-12">
							                    			<b>{{ $row->title }}</b>
							                    		</div>
							                    		<div class="col-md-12">
							                    			<p><i class="fas fa-map-marker-alt" style="font-size: 16px;"></i> {{ $row->job_location }}</p>
							                    		</div>
							                    		<div class="col-md-12">
							                    			<p><i class="fas fa-hand-holding-usd" style="font-size: 16px;"></i> <b>{{ $row->salary }}</b></p>
							                    		</div>
							                    		<div class="col-md-12">
							                    			<p><i class="fas fa-business-time" style="font-size: 16px;"></i> {{ $row->experience }}</p>
							                    		</div>
							                    		<div class="col-md-12">
							                    			<p><i class="fas fa-user-plus" style="font-size: 16px;"></i> {{ $row->vacancy }}</p>
							                    		</div>
							                    		<div class="col-md-12">
							                    			<p><i class="fas fa-calendar-alt" style="font-size: 16px;"> Deadline: </i> <b><?php echo date("d", strtotime($row->post_end_date))?> <?php echo date("F", strtotime($row->post_end_date)); ?> </b> <?php echo date("Y", strtotime($row->post_end_date)); ?></p>
							                    		</div>
							                    	</div>
							                    </div>
							                </div>
							            </a>
				        			@endforeach
						    	</div>
						  	</div>
						</div>
	            	</div>
	            </div>
	          </div>
	        </div>
	    </div>
        <!-- End Our Vision Section -->
        @include('layouts.default.template.work-together')
        <!-- Button Back Top -->
        <div class="back-top"> <a href="#top"><i class="fas fa-angle-up"></i></a> 
        </div>
        <!-- End Button Back Top -->
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
	    $("body").tooltip({ selector: '[data-toggle=tooltip]' });
	});
</script>
    <!-- Content Page -->
@include('layouts.default.footer')