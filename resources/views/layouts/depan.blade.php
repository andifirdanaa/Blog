 @extends('layouts.page_templates.front')

 @section('front')
 <header id="header" id="home">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                            
                        </div>
                        <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                            <a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">+62 21 9450 1291</span></a>
                            <a href="/"><span class="lnr lnr-envelope"></span> <span class="text">SMP BAHAGIA</span></a>         
                        </div>
                    </div>                              
                </div>
            </div>
            <div class="container main-menu">
                <div class="row align-items-center justify-content-between d-flex">
                  <div id="logo">
                    <a href="index.html"><img src="{{asset('front')}}/img/logo.png" alt="" title="" /></a>
                  </div>
                  <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      <li><a href="/">Home</a></li>
                                          
                      <li><a href="#contact">Contact</a></li>
                      <li><a href="#berita">Berita</a></li>
                      <li><a href="#daftar">Daftar</a></li>
                      <li><a href="/login">Login</a></li>
                    </ul>
                  </nav><!-- #nav-menu-container -->                    
                </div>
            </div>
          </header><!-- #header -->
          @yield('depan')
          @yield('post')
            <!-- start footer Area -->      
            <footer class="footer-area section-gap" id="contact">
                <div class="container">
                    <div class="row">
                         <div class="col-md-12">
                              <h4 class="text-uppercase mb-4">Location</h4>
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.50331238867!2d106.84714451419335!3d-6.197129462435398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec24e3f773c3%3A0x483a1180bc6cf18f!2sUniversitas+Persada+Indonesia+Y.A.I!5e0!3m2!1sid!2sid!4v1565624026788!5m2!1sid!2sid" width="1200" height="250" frameborder="0" style="box-shadow: 0px 5px 20px black; border-radius:20px;" allowfullscreen></iframe>
                        </div>
                                          
                              
                    </div>
                    <div class="footer-bottom row align-items-center justify-content-between">
                        <p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Team<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">YAI</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    
                    </div>                      
                </div>
            </footer>   
            <!-- End footer Area -->    
@endsection