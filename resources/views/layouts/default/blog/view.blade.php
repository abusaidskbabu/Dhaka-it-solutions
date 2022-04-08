    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area" style="background-image: url('{{ asset('uploads/images/banner/'.$breadcum->image)}}');">
        <div class="banner_overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Blog Details</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Blog Details</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- breadcrumb-area end -->











    <div id="main-wrapper">
        <div class="site-wrapper-reveal" id="blog_single">
            <!--====================  Blog Area Start ====================-->
            <div class="blog-pages-wrapper section-space--ptb_100">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 order-lg-2 order-2">
                            <div class="page-sidebar-content-wrapper page-sidebar-right small-mt__40 tablet-mt__40">
                                <div class="sidebar-widget widget-blog-recent-post wow move-up">
                                    <h4 class="sidebar-widget-title">Recent Posts</h4>
                                </div>
                                @php
                                    $url = url()->current();
                                    $url = explode('/', $url);
                                    $alias = $url[5];
                                    $posts = DB::table('tb_pages')->where('pagetype', 'post')->where('status', 'enable')->orderBy('pageID', 'DESC')->limit(8)->get();
                                @endphp
                                @if(count($posts) > 0)
                                @foreach($posts as $post)
                                <div class="row">
                                    <div class="col-md-4 small_blog_img">
                                        @if(File::exists(public_path('/uploads/images/'.$post->image)))
                                            <a href="{{ url('posts/read/'.$post->alias) }}"><img class="img-fluid" src="/uploads/images/{{ $post->image }}" alt="Blog Images"></a>
                                        @else
                                            <a href="{{ url('posts/read/'.$post->alias) }}"><img class="img-fluid" src="/uploads/images/notfound.jpg" alt=""></a>
                                        @endif
                                    </div>
                                    <div class="col-md-8 small_blog_text">
                                      <b class="media-heading">
                                          <a href="{{ url('posts/read/'.$post->alias) }}">
                                        {{ \Illuminate\Support\Str::limit($post->title, 20)   }}</a></b>
                                        <div class="post-date">
                                            <span class="far fa-calendar meta-icon"></span>
                                            {{  date('M d, Y', strtotime($data->created)) }}
                                        </div>
                                        <div class="post-comments">
                                            <span class="far fa-comment-alt meta-icon"></span>
                                            <a href="#" class="smooth-scroll-link">{{ $post->comments }} Comments</a>
                                        </div>   
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>




                        @if($pageid)
                        @php
                            $post = \DB::table('tb_pages')->where('pageID', $pageid)->first();
                        @endphp
                        <div class="col-lg-8 order-lg-1 order-1">
                            <div class="main-blog-wrap">
                                <div class="single-blog-item">
                                    <div class="post-feature blog-thumbnail  wow move-up">
                                        @if(File::exists(public_path('/uploads/images/'.$post->image)))
                                            <img class="img-fluid" src="/uploads/images/{{ $post->image }}" alt="Blog Images">
                                        @else
                                            <img src="/uploads/images/notfound.jpg" alt="">
                                        @endif
                                    </div>
                    
                                    <div class="post-info lg-blog-post-info  wow move-up">
                                        {{-- <div class="post-categories">
                                            <a href="#">{{ $post->metakey??'' }}</a>
                                        </div> --}}
                                        <h3 class="post-title">{{ $post->title }}</h3>
                                        <div class="post-meta mt-20">
                                            <div class="post-author">
                                                @if(File::exists(public_path('uploads/users/'.Helper::get_user_by_id($data->userid)->avatar)))
                                                    <img class="img-fluid avatar-96" src="uploads/users/{{ Helper::get_user_by_id($data->userid)->avatar }}" alt=""> 
                                                @else
                                                    <img src="uploads/users/17.png" alt="">
                                                @endif
                                                {{ Helper::get_user_by_id($data->userid)->username }}


                                            </div>
                                            <div class="post-date">
                                                <span class="far fa-calendar meta-icon"></span>
                                                {{  date('M d, Y', strtotime($data->created)) }}
                                            </div>
                                            <div class="post-view">
                                                <span class="meta-icon far fa-eye"></span>
                                                {{ $post->views }} views
                                            </div>
                                            <div class="post-comments">
                                                <span class="far fa-comment-alt meta-icon"></span>
                                                <a href="#" class="smooth-scroll-link">{{ $post->comments }} Comments</a>
                                            </div>
                                        </div>
                                        <div class="post-excerpt mt-15">
                                            <p>{!! PostHelpers::formatContent($post->note) !!}  </p>
                                        </div>
                                    </div>
                                    <!-- Post info End -->
                                </div>
                                <!--===== Single Blog Item End =========-->
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!--====================  Blog Area End  ====================-->






            <!--========== Call to Action Area Start ============-->
            <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cta-content md-text-center">
                                <h3 class="heading text-white">Assess your business potentials and find opportunities <span class="text-color-secondary">for bigger success</span></h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-button-group--one text-center">
                                <a href="#" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                                <a href="#" class="btn btn--secondary  btn-two"><span class="btn-icon me-2"><i class="far fa-info-circle"></i></span> Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--========== Call to Action Area End ============-->








        </div>
