@include('layouts.default.header')

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



<div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">

    <section id="" class="scroll-section mt50">
      <article class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
            <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="" />
            <h2 class="h2-heading">Contact Us</h2>
            <p class="col-lg-8 col-md-8 col-md-offset-2 para-txt black-color mb50">Contact us to know more about DITECH solutions & services.</p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-sm-40">
            <h6 class="aboutus-inthenews-head">To make requests for further information, contact us via our social channels.</h6>
			<ul class="list-unstyled footer-txt">
				
				<li>
				  <p class=""><i class="fas fa-map-marker-alt"></i> 
					{{ $setting->address }}
				  </p>
				</li>
				<li><a href="mailto:{{ $setting->email }}" title=""><i class="fas fa-envelope "></i> {{ $setting->email }}</a></li>
				<li><a href="tel:{{ $setting->phone }}" class="font-weight-bold" title=""><i class="fas fa-phone "></i> {{ $setting->phone }}</a></li>
			</ul>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <section id="request_for_services">
              <form class="row" method="post" action="{{ route('contact.store') }}">
                @csrf
                <div class="form-group col-lg-6">
                  <input type="text" name="name" class="form-control" placeholder="Name *">
                </div>
                <div class="form-group col-lg-6">
                  <input type="text" name="email" class="form-control" placeholder="Email *">
                </div>
                <div class="form-group col-lg-12">
                  <select class="form-control" name="subject">
                    <option value="">Select</option>
                    @foreach(DB::TABLE('dit_services')->WHERE('status',1)->get() as $row)
                    <option value="{{$row->service_name}}">{{$row->service_name}}</option>
                    @endforeach
                    <option value="Others">Others</option>
                  </select>
                </div>
                <div class="col-lg-12">
                  <textarea class="form-control" name="message" cols="40" rows="10" placeholder="Write your message here."></textarea>
                </div>
                <div class="col-lg-12 mt30 text-center">
                  <button class="btn btn-no-effect reques-btn text-uppercase" type="submit" title="Explore Careers">Send</button>
                </div>
              </form>
            </section>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8406980912973!2d90.36854091486107!3d23.753059494591948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bfd5926ebcb7%3A0xac503abf49a03eba!2sDekko%20Isho%20Group!5e0!3m2!1sen!2sbd!4v1644646513105!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </article>
    </section>
</div>

@include('layouts.default.coll-us')
        
@include('layouts.default.footer')