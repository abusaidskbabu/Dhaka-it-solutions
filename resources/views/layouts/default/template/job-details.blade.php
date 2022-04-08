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
                                <li class="breadcrumb-item active" aria-current="page">{{ $job->title }}</li>
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
	            	<div class="col-md-12 text-right">
	            		<b>Category:</b>&nbsp;{{ $job->category_name }}
	            	</div>
	              	<div class="col-md-8">
	              		<div class="text-left text-info">
	              			<h2>{{ $job->title }}</h2>
	              		</div>
		                {!! $job->description !!}
	              	</div>
	              	<div class="col-md-4">
	              		<div class="card">
							<div class="card-header bg-info text-left text-light">
							    Job Summary
							</div>
							<div class="card-body text-left">
								<small><strong>Published on:</strong>&nbsp;<?php echo date("d", strtotime($job->post_date))?> <?php echo date("F", strtotime($job->post_date)); ?> <?php echo date("Y", strtotime($job->post_date)); ?></small><br>
								<small><strong>Vacancy:</strong>&nbsp;{{ $job->vacancy }}</small><br>
								<small><strong>Employment Status:</strong>&nbsp;{{ $job->employment_tatus }}</small><br>
								<small><strong>Experience:</strong>&nbsp;{{ $job->experience }}</small><br>
								<small><strong>Gender:</strong>&nbsp;{{ $job->gender }}</small><br>
								<small><strong>Age:</strong>&nbsp;{{ $job->age }}</small><br>
								<small><strong>Job Location:</strong>&nbsp;{{ $job->job_location }}</small><br>
								<small><strong>Salary:</strong>&nbsp;{{ $job->salary }}</small><br>
								<small><strong>Application Deadline:</strong>&nbsp;<?php echo date("d", strtotime($job->post_end_date))?> <?php echo date("F", strtotime($job->post_end_date)); ?> <?php echo date("Y", strtotime($job->post_end_date)); ?></small><br>
							</div>
						</div>
	              	</div>

	              	<div class="col-md-12">
	              		<hr>
	              		<div class="text-center text-info">
	              			<h4><b>Read Before Apply</b></h4>
	              			<hr class="line-title my-3">
	              		</div>
	              		<div class="text-center">
	              			<p>Candidate who can meet the requirements and has experience on RMG division, cordially requested to apply. Company is offering an attractive salary & benefits package for this position.</p>
	              			
	              			<a target="_blank" href="{{ route('jobs.apply', $job->id) }}" class="btn btn-fill-primary" data-toggle="modal" data-target="#signinModal">APPLY</a>
	              		</div>
	              	</div>

	              	{{-- <div class="col-md-12">
	              		<hr>
	              		<div class="text-left text-info">
	              			<h4><b>Company Informations</b></h4>
	              		</div>
	              		{!! $job->company_details !!}
	              	</div> --}}
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