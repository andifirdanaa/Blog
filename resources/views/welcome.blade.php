    @extends('layouts.depan')

@section('depan')
            <!-- start banner Area -->
            <section class="banner-area relative" id="home" style="background: url('{{config('sekolah.image_banner_url')}}');">
                <div class="overlay overlay-bg"></div>  
                <div class="container">
                    <div class="row fullscreen d-flex align-items-center justify-content-between">
                        <div class="banner-content col-lg-9 col-md-12">
                            <h1 class="text-uppercase">
                                {{config('sekolah.welcome_message')}}         
                            </h1>
                            <p class="pt-10 pb-10">
                                {{config('sekolah.sub_welcome_message')}}
                            </p>
                            <a href="{{config('sekolah.welcome_message_button_text_link_url')}}" class="primary-btn text-uppercase">{{config('sekolah.welcome_message_button_text')}}</a>
                        </div>                                      
                    </div>
                </div>                  
            </section>
            <!-- End banner Area -->

            <!-- Start feature Area -->
            <section class="feature-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="single-feature">
                                <div class="title">
                                    <h4>{{config('sekolah.home_feature_column_1_tittle')}}</h4>
                                </div>
                                <div class="desc-wrap">
                                    <p>
                                       {{config('sekolah.home_feature_column_1_content')}}
                                    </p>
                                    <a href="{{config('sekolah.home_feature_column_1_link_url')}}">{{config('sekolah.home_feature_column_1_link_text')}}</a>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-feature">
                                <div class="title">
                                    <h4>{{config('sekolah.home_feature_column_2_tittle')}}</h4>
                                </div>
                                <div class="desc-wrap">
                                    <p>
                                       {{config('sekolah.home_feature_column_2_content')}}
                                    </p>
                                    <a href="{{config('sekolah.home_feature_column_2_link_url')}}">{{config('sekolah.home_feature_column_2_link_text')}}</a>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-feature">
                                <div class="title">
                                    <h4>{{config('sekolah.home_feature_column_3_tittle')}}</h4>
                                </div>
                                <div class="desc-wrap">
                                    <p>
                                       {{config('sekolah.home_feature_column_3_content')}}
                                    </p>
                                    <a href="{{config('sekolah.home_feature_column_3_link_url')}}">{{config('sekolah.home_feature_column_1_link_text')}}</a>                                    
                                </div>
                            </div>
                        </div>                                              
                    </div>
                </div>  
            </section>
            <!-- End feature Area -->
                    
            <!-- Start popular-course Area -->
            <section class="popular-course-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">Popular Courses we offer</h1>
                                <p>There is a moment in the life of any aspiring.</p>
                            </div>
                        </div>
                    </div>                      
                    <div class="row">
                        <div class="active-popular-carusel">
                            <div class="single-popular-carusel">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>  
                                        <img class="img-fluid" src="{{asset('front')}}/img/p1.jpg" alt="">
                                    </div>
                                    <div class="meta d-flex justify-content-between">
                                        <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                                        <h4>$150</h4>
                                    </div>                                  
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4>
                                            Learn Designing
                                        </h4>
                                    </a>
                                    <p>
                                        When television was young, there was a hugely popular show based on the still popular fictional characte                                        
                                    </p>
                                </div>
                            </div>  
                            <div class="single-popular-carusel">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>  
                                        <img class="img-fluid" src="{{asset('front')}}/img/p2.jpg" alt="">
                                    </div>
                                    <div class="meta d-flex justify-content-between">
                                        <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                                        <h4>$150</h4>
                                    </div>                                  
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4>
                                            Learn React js beginners
                                        </h4>
                                    </a>
                                    <p>
                                        When television was young, there was a hugely popular show based on the still popular fictional characte                                        
                                    </p>
                                </div>
                            </div>  
                            <div class="single-popular-carusel">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>  
                                        <img class="img-fluid" src="{{asset('front')}}/img/p3.jpg" alt="">
                                    </div>
                                    <div class="meta d-flex justify-content-between">
                                        <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                                        <h4>$150</h4>
                                    </div>                                  
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4>
                                            Learn Photography
                                        </h4>
                                    </a>
                                    <p>
                                        When television was young, there was a hugely popular show based on the still popular fictional characte                                        
                                    </p>
                                </div>
                            </div>  
                            <div class="single-popular-carusel">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>  
                                        <img class="img-fluid" src="{{asset('front')}}/img/p4.jpg" alt="">
                                    </div>
                                    <div class="meta d-flex justify-content-between">
                                        <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                                        <h4>$150</h4>
                                    </div>                                  
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4>
                                            Learn Surveying
                                        </h4>
                                    </a>
                                    <p>
                                        When television was young, there was a hugely popular show based on the still popular fictional characte                                        
                                    </p>
                                </div>
                            </div>
                            <div class="single-popular-carusel">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>  
                                        <img class="img-fluid" src="{{asset('front')}}/img/p1.jpg" alt="">
                                    </div>
                                    <div class="meta d-flex justify-content-between">
                                        <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                                        <h4>$150</h4>
                                    </div>                                  
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4>
                                            Learn Designing
                                        </h4>
                                    </a>
                                    <p>
                                        When television was young, there was a hugely popular show based on the still popular fictional characte                                        
                                    </p>
                                </div>
                            </div>  
                            <div class="single-popular-carusel">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>  
                                        <img class="img-fluid" src="{{asset('front')}}/img/p2.jpg" alt="">
                                    </div>
                                    <div class="meta d-flex justify-content-between">
                                        <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                                        <h4>$150</h4>
                                    </div>                                  
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4>
                                            Learn React js beginners
                                        </h4>
                                    </a>
                                    <p>
                                        When television was young, there was a hugely popular show based on the still popular fictional characte                                        
                                    </p>
                                </div>
                            </div>  
                            <div class="single-popular-carusel">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>  
                                        <img class="img-fluid" src="{{asset('front')}}/img/p3.jpg" alt="">
                                    </div>
                                    <div class="meta d-flex justify-content-between">
                                        <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                                        <h4>$150</h4>
                                    </div>                                  
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4>
                                            Learn Photography
                                        </h4>
                                    </a>
                                    <p>
                                        When television was young, there was a hugely popular show based on the still popular fictional characte                                        
                                    </p>
                                </div>
                            </div>  
                            <div class="single-popular-carusel">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>  
                                        <img class="img-fluid" src="{{asset('front')}}/img/p4.jpg" alt="">
                                    </div>
                                    <div class="meta d-flex justify-content-between">
                                        <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
                                        <h4>$150</h4>
                                    </div>                                  
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4>
                                            Learn Surveying
                                        </h4>
                                    </a>
                                    <p>
                                        When television was young, there was a hugely popular show based on the still popular fictional characte                                        
                                    </p>
                                </div>
                            </div>                          
                        </div>
                    </div>
                </div>  
            </section>
            <!-- End popular-course Area -->
            
            
        
            <!-- Start upcoming-event Area -->
            <section class="upcoming-event-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">Upcoming Events of our Institute</h1>
                                <p>If you are a serious astronomy fanatic like a lot of us</p>
                            </div>
                        </div>
                    </div>                              
                    <div class="row">
                        <div class="active-upcoming-event-carusel">
                            <div class="single-carusel row align-items-center">
                                <div class="col-12 col-md-6 thumb">
                                    <img class="img-fluid" src="{{asset('front')}}/img/e1.jpg" alt="">
                                </div>
                                <div class="detials col-12 col-md-6">
                                    <p>25th February, 2018</p>
                                    <a href="#"><h4>The Universe Through
                                    A Child S Eyes</h4></a>
                                    <p>
                                        For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                                    </p>
                                </div>
                            </div>
                            <div class="single-carusel row align-items-center">
                                <div class="col-12 col-md-6 thumb">
                                    <img class="img-fluid" src="{{asset('front')}}/img/e2.jpg" alt="">
                                </div>
                                <div class="detials col-12 col-md-6">
                                    <p>25th February, 2018</p>
                                    <a href="#"><h4>The Universe Through
                                    A Child S Eyes</h4></a>
                                    <p>
                                        For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                                    </p>
                                </div>
                            </div>  
                            <div class="single-carusel row align-items-center">
                                <div class="col-12 col-md-6 thumb">
                                    <img class="img-fluid" src="{{asset('front')}}/img/e1.jpg" alt="">
                                </div>
                                <div class="detials col-12 col-md-6">
                                    <p>25th February, 2018</p>
                                    <a href="#"><h4>The Universe Through
                                    A Child S Eyes</h4></a>
                                    <p>
                                        For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                                    </p>
                                </div>
                            </div>  
                            <div class="single-carusel row align-items-center">
                                <div class="col-12 col-md-6 thumb">
                                    <img class="img-fluid" src="{{asset('front')}}/img/e1.jpg" alt="">
                                </div>
                                <div class="detials col-12 col-md-6">
                                    <p>25th February, 2018</p>
                                    <a href="#"><h4>The Universe Through
                                    A Child S Eyes</h4></a>
                                    <p>
                                        For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                                    </p>
                                </div>
                            </div>
                            <div class="single-carusel row align-items-center">
                                <div class="col-12 col-md-6 thumb">
                                    <img class="img-fluid" src="{{asset('front')}}/img/e2.jpg" alt="">
                                </div>
                                <div class="detials col-12 col-md-6">
                                    <p>25th February, 2018</p>
                                    <a href="#"><h4>The Universe Through
                                    A Child S Eyes</h4></a>
                                    <p>
                                        For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                                    </p>
                                </div>
                            </div>  
                            <div class="single-carusel row align-items-center">
                                <div class="col-12 col-md-6 thumb">
                                    <img class="img-fluid" src="{{asset('front')}}/img/e1.jpg" alt="">
                                </div>
                                <div class="detials col-12 col-md-6">
                                    <p>25th February, 2018</p>
                                    <a href="#"><h4>The Universe Through
                                    A Child S Eyes</h4></a>
                                    <p>
                                        For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                                    </p>
                                </div>
                            </div>                                                                                      
                        </div>
                    </div>
                </div>  
            </section>
            <!-- End upcoming-event Area -->
                        
            <!-- Start review Area -->
            <section class="review-area section-gap relative">
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row">
                        <div class="active-review-carusel">
                            <div class="single-review item">
                                <div class="title justify-content-start d-flex">
                                    <a href="#"><h4>Fannie Rowe</h4></a>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <p>
                                    Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                                </p>
                            </div>
                            <div class="single-review item">
                                <div class="title justify-content-start d-flex">
                                    <a href="#"><h4>Hulda Sutton</h4></a>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <p>
                                    Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                                </p>
                            </div>
                            <div class="single-review item">
                                <div class="title justify-content-start d-flex">
                                    <a href="#"><h4>Fannie Rowe</h4></a>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <p>
                                    Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                                </p>
                            </div>
                            <div class="single-review item">
                                <div class="title justify-content-start d-flex">
                                    <a href="#"><h4>Hulda Sutton</h4></a>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <p>
                                    Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                                </p>
                            </div>  
                            <div class="single-review item">
                                <div class="title justify-content-start d-flex">
                                    <a href="#"><h4>Fannie Rowe</h4></a>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <p>
                                    Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                                </p>
                            </div>
                            <div class="single-review item">
                                <div class="title justify-content-start d-flex">
                                    <a href="#"><h4>Hulda Sutton</h4></a>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <p>
                                    Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                                </p>
                            </div>
                            <div class="single-review item">
                                <img src="{{asset('front')}}/img/r1.png" alt="">
                                <div class="title justify-content-start d-flex">
                                    <a href="#"><h4>Fannie Rowe</h4></a>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <p>
                                    Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                                </p>
                            </div>
                            <div class="single-review item">
                                <div class="title justify-content-start d-flex">
                                    <a href="#"><h4>Hulda Sutton</h4></a>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <p>
                                    Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                                </p>
                            </div>                                                                                                              
                        </div>
                    </div>
                </div>  
            </section>
            <!-- End review Area -->    
            
            <!-- Start cta-one Area -->
            <section class="cta-one-area relative section-gap">
                <div class="container">
                    <div class="overlay overlay-bg"></div>
                    <div class="row justify-content-center">
                        <div class="wrap">
                            <h1 class="text-white">Become an instructor</h1>
                            <p>
                                There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station whether that is on the deck.
                            </p>
                            <a class="primary-btn wh" href="#">Apply for the post</a>                               
                        </div>                  
                    </div>
                </div>  
            </section>
            <!-- End cta-one Area -->

            <!-- Start blog Area -->
            <section class="blog-area section-gap" id="blog">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">Seluruh Berita</h1>
                            </div>
                        </div>
                    </div>                  
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-lg-3 col-md-6 single-blog">
                            <div class="thumb">
                                <img class="img-fluid" src="{{$post->thumbnail()}}" alt="">                             
                            </div>
                            <p class="meta">{{$post->created_at->format('d-M-Y')}} <a href="#">{{$post->user->name}}</a></p>
                            <a href="blog-single.html">
                                <h5>{{$post->tittle}}</h5>
                            </a>
                            <p>
                               {{$post->content}}
                            </p>
                            <a href="/singlepost/{{$post->id}}" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>      
                        </div>
                        @endforeach
                       
                    </div>
                </div>  
            </section>
            <!-- End blog Area -->          
            

          
@endsection  