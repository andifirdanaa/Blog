@extends('layouts.depan')

@section('depan')
<!-- start banner Area -->
			<section class="banner-area relative" id="home" style="background: url('{{config('sekolah.image_banner_url')}}');">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								SMP BAHAGIA				
							</h1>	
							
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  
			
			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12">
									<div class="feature-img">
										<img class="img-fluid" src="{{config('sekolah.image_banner_2')}}" alt="">
									</div>									
								</div>
								<div class="col-lg-3  col-md-3 meta-details">
									
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{$post->user->name}}</a> <span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><a href="#">{{$post->created_at->diffForHumans()}}</a> <span class="lnr lnr-calendar-full"></span></p>
										
																								
									</div>
								</div>
								<div class="col-lg-9 col-md-9">
									<h3 class="mt-20 mb-20">{{$post->tittle}}</h3>
									<p class="excert">
										{{$post->content}}
									</p>
									
								</div>
								<div class="col-lg-12">
									<div class="quotes">
										Berita terbaru mengenai SMP BAHAGIA dapat dilihat lewat website blog SMP Bahagia, berita mengenai informasi sekolah, informasi pendaftaran, pendaftaran online.										
									</div>
									<div class="row mt-30 mb-30">
										
														
									</div>
								</div>
							</div>
							<div class="navigation-area">
								
							</div>
							
								
							<div class="comment-form">
								<h4>Leave a Comment</h4>
								<form>
									<div class="form-group form-inline">
									  <div class="form-group col-lg-6 col-md-12 name">
									    <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
									  </div>
									  <div class="form-group col-lg-6 col-md-12 email">
									    <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
									  </div>										
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
									</div>
									<div class="form-group">
										<textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
									</div>
									<a href="#" class="primary-btn text-uppercase">Post Comment</a>	
								</form>
							</div>
						</div>
						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								
								<div class="single-sidebar-widget user-info-widget">
									<img src="{{config('sekolah.image_profile')}}" alt="" width="100px" height="100px;">
									<a href="#"><h4>{{$post->user->name}}</h4></a>
									<p>
										Writer
									</p>
									
									<p>
										Website ini dikelola oleh sekolah
									</p>
								</div>
								<div class="single-sidebar-widget popular-post-widget">
									<h4 class="popular-title">Popular Posts</h4>
									<div class="popular-post-list">
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="img/blog/pp1.jpg" alt="">
											</div>
											<div class="details">
												<a href="blog-single.html"><h6>Space The Final Frontier</h6></a>
												<p>02 Hours ago</p>
											</div>
										</div>
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="img/blog/pp2.jpg" alt="">
											</div>
											<div class="details">
												<a href="blog-single.html"><h6>The Amazing Hubble</h6></a>
												<p>02 Hours ago</p>
											</div>
										</div>
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="img/blog/pp3.jpg" alt="">
											</div>
											<div class="details">
												<a href="blog-single.html"><h6>Astronomy Or Astrology</h6></a>
												<p>02 Hours ago</p>
											</div>
										</div>
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="img/blog/pp4.jpg" alt="">
											</div>
											<div class="details">
												<a href="blog-single.html"><h6>Asteroids telescope</h6></a>
												<p>02 Hours ago</p>
											</div>
										</div>															
									</div>
								</div>
								
								
								
										
							</div>
						</div>
					</div>
				</div>	
			</section>
@endsection