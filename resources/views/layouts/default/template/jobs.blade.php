@include('layouts.default.header')
 <div class="wrapper-page">
    <div class="content-page">
        <div class="page-breadcrumb d-flex h-100 " style="background-image: url({{url('/')}}/uploads/images/banner/{{ $breadcum->image }});">
            <div class="container align-self-center w-100">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="content-page-breadcrumb text-center">
                            <div class="title-page-breadcrumb">
                                <h1>{{ $role->category_name ?? 'All' }} {{ $title }}</h1>
                            </div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $role->category_name ?? 'All' }} {{ $title }}</li>
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
	              	<div class="col-md-12 col-lg-8 offset-lg-2">
		                <h1>{{ $role->category_name ?? 'All' }}</h1>
		                <hr class="line-title my-3">
		                <h4>{{ $role->descriptions ?? '' }}</h4>
	              	</div>
	            </div>
	          </div>
	        </div>
	        <div class="gr-card-services">
	          	<div class="container">
		            <div class="row mb-5">
		              	<div class="col-md-1">
		              		<div class="d-flex flex-column flex-shrink-0 bg-light box-shado">
							    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
							    	@foreach(DB::table('tbl_role_catgory')->where('status', 1)->orderBy('category_name', 'ASC')->get() as $row)
							    		@php 
						              		$total_job = DB::table('con_circular')->where('category', $row->id)->where('status', 1)->count();
						              	@endphp
									    <li class="nav-item animated-Fade-In-{{ $loop->iteration }}">
									        <a href="{{ route('jobs',['id'=>$row->id,'name'=>$row->category_name]) }}" class="nav-link @if($row->id == $role->id)active @endif py-3 border-bottom " aria-current="page" data-toggle="tooltip" data-placement="right" title="{{ $row->category_name }} ({{ $total_job }})">
									        	<i class="{{ $row->icon }}" width="24" height="24" role="img" aria-label="{{ $row->category_name }}"></i>
									        </a>
									    </li>
							      	@endforeach
							    </ul>
							</div>
		              	</div>
		              	<div class="col-md-11">
		              		@foreach($jobs as $row)
			              		<a href="{{ route('jobs.details', $row->id) }}" style="text-decoration: none;">
				              		<div class="card card-services p-3 box-shado text-center animated-Fade-In-{{ $loop->iteration }}">
					                    <div class="card-body p-0 text-left">
					                    	<div class="row">
					                    		<div class="col-md-12">
					                    			<h4>{{ $row->title }}</h4>
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
					                    			<div class="row">
					                    				<div class="col-lg-8">
					                    					<p><i class="fas fa-user-plus" style="font-size: 16px;"></i> {{ $row->vacancy }}</p>
					                    				</div>
					                    				<div class="col-md-4 text-right">
					                    					<p><i class="fas fa-calendar-alt" style="font-size: 16px;"> Deadline: </i> <b><?php echo date("d", strtotime($row->post_end_date))?> <?php echo date("F", strtotime($row->post_end_date)); ?> </b> <?php echo date("Y", strtotime($row->post_end_date)); ?></p>
					                    				</div>
					                    			</div>
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