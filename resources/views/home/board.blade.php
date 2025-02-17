@extends('home.layouts.app')

@section('title','Board Members | Mwalimu Junior School')
@section('description','Board Members for Mwalimu Junior School')

@section('content')

    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our Director</h1>
                <p class="breadcumb-text">The Future Begins Now</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home.index')}}">Home</a></li>
                        <li>Our Founder</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--==============================
    Team Area
    ==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="#"><img src="{{asset('assets/img/mwalimu.png')}}" alt="team"></a>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name h2"><a href="#" class="text-inherit">Mr. Robert Amanya</a>
                            </h3>
                            <p class="team-degi">Our Director</p>
                            <div class="vs-social">
                               <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat eum tenetur delectus, harum officiis neque iure doloremque deleniti dolorem illo! Rerum, est! Rem culpa nobis at recusandae, blanditiis facilis natus!
                               </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
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