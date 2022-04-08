      <!--====================  brand logo slider area ====================-->
      <div class="brand-logo-slider-area section-space--ptb_60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- brand logo slider -->
                    <div class="brand-logo-slider__container-area">
                        <div class="swiper-container brand-logo-slider__container">
                            <div class="swiper-wrapper brand-logo-slider__one">
                                  @if($ourclients)
                                  @foreach($ourclients as $data)
                                  <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="{{  $data->partner_link }}">
                                        <div class="brand-logo__image">
                                            <img src="uploads/images/clients/{{  $data->image }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="uploads/images/clients/{{  $data->image }}" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                  </div>
                                  @endforeach
                                  @endif
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of brand logo slider area  ====================-->