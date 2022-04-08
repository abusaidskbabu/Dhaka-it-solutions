@include('layouts.default.header')
<style>
.job_item{
    padding-top: 20px;
    padding-bottom: 10px;
    margin-top: 20px;
    background: #b7babf8a;
}    
.job_item:hover{
    background: #2590c8;
}
.job_item:hover .serial_text{
   border:1px solid #fff;
}

.job_item:hover .apply_button{
   border:1px solid #fff;
}



.serial_text, .apply_button{
    color:#fff;
}

#full_career{
    padding-top: 30px;
    padding-bottom: 50px;    
}
.date_item, .post_title{
    color:#000;
}
.job_item:hover .date_item{
   color:#fff;
}
.job_item:hover .post_title{
   color:#fff;
}

.serial_text{
    padding: 20px 25px 20px 25px;
    background: #2590c8;
}
.apply_button{
    padding: 10px 0px 10px 15px;
    background: #2590c8;
    text-transform: uppercase;
    transition-duration: 1s;
}
.apply_button:hover{
    color:#fff;
    padding: 10px 15px 10px 15px;
}
.mychev{
    margin-left:10px;
}

.apply_button i{
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s 0.5s, opacity 0.5s linear;
}

.apply_button:hover i{
  visibility: visible;
  opacity: 1;
  transition: opacity 0.5s linear;
}
.mytext{
    margin-top:15px;
}
#full_career{
    padding-top: 100px !important;
    min-height:90vh;
}

</style>

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


<section id="full_career">
    <div class="container">
    @foreach($circular as $key => $c)
      <div class="job_item">
        <div class="row">
                <div class="col-md-2">
                    <p class="text-center mytext"><span class="serial_text">{{$key+1}}</span></p>
                </div>
                <div class="col-md-8">
                    <p class="date_item">Post Date: {{ date('d M, Y', strtotime($c->post_date)) }}</p>
                     <p class="post_title text-uppercase">{{strtoupper($c->title)}}</p>
                    <!-- <p class="date_item red-text">Deadline: {{ date('d M, Y', strtotime($c->post_end_date)) }}</p> -->
                </div>
                <div class="col-md-2">
                    <div class="mytext">
                        <a class="apply_button button" href="{{ route('circular', $c->id) }}"><span>apply now  <i class="fa fa-angle-double-right mychev" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>
       </div>
      @endforeach

    </div>

</section> 
  

	  


@include('layouts.default.footer')