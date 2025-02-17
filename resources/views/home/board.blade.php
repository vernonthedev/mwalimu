@extends('home.layouts.app')

@section('title','Board Members | Mwalimu Junior School')
@section('description','Board Members for Mwalimu Junior School')

@section('content')

    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="https://fakeimg.pl/1200x600?text=Board+Members">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our Directors</h1>
                <p class="breadcumb-text">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home.index')}}">Home</a></li>
                        <li>Our Directors</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--==============================
    Team Area
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="team-style1 layout2">
                        <div class="team-img">
                            <a href="#"><img src="{{asset('assets/img/mwalimu.png')}}" alt="team"></a>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name h2"><a href="#" class="text-inherit">Mr Amanyire Collins</a>
                            </h3>
                            <p class="team-degi">Headteacher</p>
                            <a href="tel:+25670000000" class="team-number">+256 700 000 000</a>
                            <div class="vs-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="team-style1 layout2">
                        <div class="team-img">
                            <a href="#"><img src="{{asset('assets/img/mwalimu.png')}}" alt="team"></a>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name h2"><a href="#" class="text-inherit">Mr Herbert Mugisha</a>
                            </h3>
                            <p class="team-degi">Director</p>
                            <a href="tel:+25670000000" class="team-number">+256 700 000 000</a>
                            <div class="vs-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="team-style1 layout2">
                        <div class="team-img">
                            <a href="#"><img src="{{asset('assets/img/mwalimu.png')}}" alt="team"></a>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name h2"><a href="#" class="text-inherit">Ms Florence Namirembe</a>
                            </h3>
                            <p class="team-degi">Director</p>
                            <a href="tel:+25670000000" class="team-number">+256 700 000 000</a>
                            <div class="vs-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-30">
                <div class="vs-pagination pt-md-3">
                    <a href="#" class="pagi-btn">Prev</a>
                    <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">12</a></li>
                    </ul>
                    <a href="#" class="pagi-btn">next</a>
                </div>
            </div>
        </div>
    </section><!--==============================
    Call To Action
    ==============================-->
    <section class=" space-bottom">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-10">
                    <div class="icon-btn style2 mb-4 mb-lg-5"><img src="assets/img/icon/cta-i-1-1.svg" alt="icon"></div>
                    <h2 class="sec-title mb-lg-3 pb-lg-1">Interested In Joining Our Team?</h2>
                    <p class="sec-text col-10 mx-auto mb-3 mb-lg-5">At Mwalimu Junior School, we are always looking for passionate and dedicated individuals to join our vibrant team. If you have a love for education and a desire to make a positive impact on young learners, we’d love to hear from you! Explore our current opportunities and become part of our journey to shape bright futures.</p>
                    <a href="{{ route('contact')}}" class="vs-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    
    
    

@endsection