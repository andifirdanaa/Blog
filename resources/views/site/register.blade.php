@extends('layouts.depan')

@section('depan')

<section class="search-course-area relative" style="background: unset;">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        
                        <div class="col-lg-4 col-md-6 search-course-right section-gap" id="daftar">
                            <form class="form-wrap" method="post" action="" autocomplete="off">
                                <h4 class="text-white pb-20 text-center mb-30">Daftar Akun</h4>     
                                <input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
                                <input type="email" class="form-control" name="email" placeholder="Your Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email'" >
                                 @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                <input type="text" class="form-control" name="name" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" >
                                <input type="text" class="form-control" name="name" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" >
                                   
                                <button class="primary-btn text-uppercase">SIGN UP</button>
                            </form>
                        </div>
                    </div>
                </div>  
            </section>
@endsection