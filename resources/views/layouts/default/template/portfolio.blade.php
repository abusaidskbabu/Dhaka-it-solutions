@include('layouts.default.header')
    <!-- Breadcrumb Start -->
	<div style="background-color:#0000">
	    
	    <section class="breadcrumb-menu">
	        <article class="container">
	            <div class="row">
	                <div class="col-md-12 col-sm-12 col-xs-12">
	                    <div class="listmenu">
	                        <div class="hero-list">
	                            <nav aria-label="Breadcrumb">

	                                <ol class="breadcrumb rmv-breadcrum navbar-left hidden-tab">
	                                    <li class="dropdown mega-dropdown">
	                              
	                                        <a href="about.html" class="dropdown-toggle disabled" data-toggle="dropdown">
	                                        {{ $title }}
	                                        <i class="fa fa-chevron-circle-down reverseArrow" aria-hidden="true"></i>
	                                    
	                                        </a>
	                                    </li>
	                           
	                                </ol>
	                            </nav>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </article>
	    </section>
	</div>

	<style type="text/css">
		 .hovereffect {
	  width: 100%;
	  height: 100%;
	  float: left;
	  overflow: hidden;
	  position: relative;
	  text-align: center;
	  cursor: default;
	  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
	  border-radius: 5%;
	}
.hovereffect .overlay {
  position: absolute;
  overflow: hidden;
  width: 80%;
  height: 80%;
  left: 10%;
  top: 10%;
  border-bottom: 1px solid #FFF;
  border-top: 1px solid #FFF;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(0,1);
  -ms-transform: scale(0,1);
  transform: scale(0,1);
}
.hovereffect:hover{
	background: #42b078;
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.hovereffect:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
  filter: brightness(0.6);
  -webkit-filter: brightness(0.6);
}

.hovereffect h2 {
  text-transform: uppercase;
  text-align: center;
  position: relative;
  font-size: 17px;
  background-color: transparent;
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,-100%,0);
  transform: translate3d(0,-100%,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,100%,0);
  transform: translate3d(0,100%,0);
}

.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}
.d-none {
  display: none !important;
}

.d-block {
  display: block !important;
}

	</style>

	<div class="banner parbase @if(empty($breadcum->image)) l3-gradient aem-GridColumn @endif aem-GridColumn--default--12" @if(!empty($breadcum->image)) style="background-image: url('{{url('/')}}/uploads/images/banner/{{$breadcum->image}}'); background-repeat: no-repeat;background-position: center;" @endif>
    <section id="sml_ht_home_banner">
        <div id="main-cnt"> </div>
        <article class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 ">
                    <h1 class="h2-heading white-color l-top">
                        {{ $title }}
                    </h1>
                </div>
            </div>
        </article>
    </section>
</div>



        <!-- Logo Partner Section -->
        <div class="logo-partner pt50 pb50">
          <div class="title-page text-white text-center">
            <div class="container">
              <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
                  <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="">
                  <h2 class="h2-heading black-color">Our Protfolio</h2>
                  
                </div>
            </div>
            </div>
          </div>
          <div class="base-logo-partner mt50 mb50">
            <div class="container wow fadeInUp" data-wow-delay="0.6s">
              <div class="row">
                <div class="col-lg-12">
                    <!-- Tabs navs -->
          					<ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                      <li class="nav-item " role="presentation">
                        <a class="btn btn-no-effect reques-btn category" id="all" style="background-color: #eee;">All</a>
                      </li>
                      @foreach($category as $row)
          					  <li class="nav-item" role="presentation">
          					    <a class="btn btn-no-effect reques-btn category" id="{{$row->id}}" style="background-color: #eee;">{{$row->title}}</a>
          					  </li>
                      @endforeach
          					</ul>
          					<!-- Tabs navs -->

          					<!-- Tabs content -->
          					<div class="tab-content" id="">
          					  	<div class="tab-pane" id="ex1-tabs-1" role="tabpanel">
          					    	<div class="row mt10">
                            @foreach($portfolio as $row)
          					    		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb10 pitem pitem{{ $row->category_id}}" id="{{ $row->category_id}}">
          								    <div class="hovereffect">
          								        <img class="img-responsive" src="{{url('/')}}/uploads/images/portfolio/{{ $row->image }}" alt="" alt="" style="height: 190px; padding: 20%;    object-fit: contain;width:100%;">
      								            <div class="overlay">
      								                <h2>{{$row->title}}</h2>
              												<p>
              													<a href="{{ route('portfolio.details', $row->id)}}">VIEW MORE</a>
              												</p>
      								            </div>
          								    </div>
          								  </div>
                            @endforeach
          					    	</div>
          					  	</div>
          					</div>
          					<!-- Tabs content -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Logo Partner Section -->
        <!-- End Our Vision Section -->

        <div class="logo-partner pt50 pb50 " style="background-color: #85C1E9 !important;">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
                      <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="">
                      <h2 class="h2-heading white-color">Testimonial</h2>
                      
                </div>
              <div class="col-md-12">
                <div class="base-logo-partner mt50 mb50">
                    <div class="container wow fadeInUp" data-wow-delay="0.6s">
                    <h5 class="employeespeak-head text-uppercase">What our client say</h5>
                        <div id="employeespeak_slider" class="owl-carousel owl-theme">
                          @php
                            $happy_client = DB::table('tbl_client_say')->where('status',1)->orderBy('id','DESC')->get();
                          @endphp
                          @foreach($happy_client as $row)
                          <div class="item"> 
                            <img class="img-employee" src="{{url('/')}}/uploads/images/clients/{{ $row->image }}" alt="Danielle" /> 
                            <em class="employeespeak-content">&quot;{{ $row->comment }}&quot; <br>
                            - {{ $row->client_name }}, {{ $row->address }}</em> 
                          </div>
                          @endforeach
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

       <script type="text/javascript">
       		$(document).on('click', '.category', function(){  
		        var id  = $(this).attr('id');
            $('.category').removeClass('active');
            $(this).addClass('active');
            if (id == 'all') {
              $('.pitem').removeClass('d-none');
              $('.pitem').addClass('d-block');
            }else{
              $('.pitem').removeClass('d-block');
              $('.pitem').removeClass('d-none');

              $('.pitem').each(function() {
                var cat_id =  $(this).attr('id');
                if (cat_id == id) {
                  $('.pitem'+cat_id).removeClass('d-none');
                  $('.pitem'+cat_id).addClass('d-block');
                }else{
                  $('.pitem'+cat_id).removeClass('d-block');
                  $('.pitem'+cat_id).addClass('d-none');
                }
              });
            }
            // alert(id);
		      }); 
       </script>
       
@include('layouts.default.coll-us')

@include('layouts.default.footer')