<div class="testimonial-slider-area section-space--pt_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-wrap text-center section-space--mb_40">
                    <h6 class="section-sub-title mb-20">Testimonials </h6>
                    <h3 class="heading">What do people praise about <span class="text-color-primary"> Mitech?</span></h3>
                </div>
                <div class="testimonial-slider">
                    <div class="swiper-container testimonial-slider__container">
                        <div class="swiper-wrapper testimonial-slider__wrapper">

                            @if ($testimonials)
                                @foreach ($testimonials as $data)
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__one wow move-up">

                                        <div class="testimonial-slider--info">
                                            <div class="testimonial-slider__media">
                                                <img src="uploads/images/testimonial/{{ $data->image }}" class="img-fluid" alt="">
                                            </div>

                                            <div class="testimonial-slider__author">
                                                {{-- <div class="testimonial-rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div> --}}
                                                <div class="author-info">
                                                    <h6 class="name">{{ $data->name }}</h6>
                                                 
                                                    {{-- <span class="designation">Marketing</span> --}}
                                                </div>
                                                <div class="designation">
                                                    <p>{{ $data->designation }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-slider__text">{{ $data->dialogue }}</div>

                                    </div>
                                </div>
                                @endforeach
                            @endif

                            
                        </div>
                        <div class="swiper-pagination swiper-pagination-t01 section-space--mt_30"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>