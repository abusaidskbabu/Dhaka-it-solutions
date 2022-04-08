<div class="contact-us-area service-contact-bg section-space--ptb_100">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-4">
                <div class="contact-info sytle-one service-contact text-left">

                    <div class="contact-info-title-wrap text-center">
                        <h3 class="heading text-white mb-10">4.9/5.0</h3>
                        <div class="ht-star-rating lg-style">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <p class="sub-text">by 700+ customers for 3200+ clients</p>
                    </div>

                    <div class="contact-list-item">
                        <a href="tel:190068668" class="single-contact-list">
                            <div class="content-wrap">
                                <div class="content">
                                    <div class="icon">
                                        <span class="fal fa-phone"></span>
                                    </div>
                                    <div class="main-content">
                                        <h6 class="heading">Call for advice now!</h6>
                                        <div class="text">1900 68668</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="mailto:hello@mitech.com" class="single-contact-list">
                            <div class="content-wrap">
                                <div class="content">
                                    <div class="icon">
                                        <span class="fal fa-envelope"></span>
                                    </div>
                                    <div class="main-content">
                                        <h6 class="heading">Say hello</h6>
                                        <div class="text">hello@mitech.com</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-lg-7 ms-auto">
                <div class="contact-form-service-wrap">
                    <div class="contact-title text-center section-space--mb_40">
                        <h3 class="mb-10">Need a hand?</h3>
                        <p class="text">Reach out to the world’s most reliable IT services.</p>
                    </div>

                    <!-- <form class="contact-form" id="contact-form-2" action="https://whizthemes.com/mail-php/jowel/mitech/php/services-mail.php" method="post"> -->
                    <form class="contactform" id="contactform2" action="{{ route('contact.store') }}" method="post">
                        <div class="contact-form__two">
                            <div class="contact-input">
                                <div class="contact-inner">
                                    <input name="name" type="text" placeholder="Name *" required>
                                    <small style="color:red">{{ $errors->first('name') }}</small>


                                </div>
                                <div class="contact-inner">
                                    <input name="email" type="email" placeholder="Email *" required>
                                    <small style="color:red">{{ $errors->first('email') }}</small>
                                </div>
                            </div>
                            <div class="contact-select">
                                {{-- <div class="form-item contact-inner">
                                    <span class="inquiry">
                                          <select id="Visiting" name="Visiting">
                                              <option disabled selected>Select Department to email</option>
                                              <option value="Your inquiry about">Your inquiry about</option>
                                              <option value="General Information Request">General Information Request</option>
                                              <option value="Partner Relations">Partner Relations</option>
                                              <option value="Careers">Careers</option>
                                              <option value="Software Licencing">Software Licencing</option>
                                          </select>
                                      </span>
                                </div> --}}
                                <div class="contact-inner">
                                  <input name="subject" type="text" placeholder="subject">
                              </div>
                            </div>
                            <div class="contact-inner contact-message">
                                <textarea name="message" placeholder="Please describe what you need. *"></textarea>
                                <small style="color:red">{{ $errors->first('message') }}</small>
                                
         


                              </div>
                            <div class="comment-submit-btn">
                              @if(session()->has('success'))
                                  <div class="alert alert-success">
                                      {{ session()->get('success') }}
                                  </div>
                              @endif
                                <button class="con_sub" type="submit">Send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>