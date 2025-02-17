@extends('home.layouts.app')

@section('title', 'Contact Us | Mwalimu Junior School')
@section('description', 'Mwalimu Junior School is ...')

@section('content')

    
    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{asset('assets/images/mwalimuImage-no.12.JPG')}}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <p class="breadcumb-text text-white">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home.index')}}">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--==============================
    Contact Area
    ==============================-->



   

    <section class=" space-top space-extra-bottom ">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="info-style2">
                        <div class="info-icon"><img src="assets/img/icon/c-b-1-1.svg" alt="icon"></div>
                        <h3 class="info-title">Phone No</h3>
                        <p class="info-text"><a href="tel:+256764307307" class="text-inherit">+256 764 307 307</a>
                        </p>
                        <p class="info-text"><a href="tel:+256743001558" class="text-inherit">+256 743 001 558</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-style2">
                        <div class="info-icon"><img src="assets/img/icon/c-b-1-2.svg" alt="icon"></div>
                        <h3 class="info-title">Monday to Friday</h3>
                        <p class="info-text">8.30am – 06.00pm</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-style2">
                        <div class="info-icon"><img src="assets/img/icon/c-b-1-3.svg" alt="icon"></div>
                        <h3 class="info-title">Email Address</h3>
                        <p class="info-text"><a href="mailto:info@mwalimujuniorschool.com"
                                class="text-inherit">info@mwalimujuniorschool.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
    Contact Area
    ==============================-->
    <section class=" space-extra-bottom ">
        <div class="container">
            <div class="row flex-row-reverse gx-60 justify-content-between">
                <div class="col-xl-auto">
                    <img src="{{asset('assets/images/mwalimuImage-no.6.JPG')}}" alt="Contact Mwalimu Junior School" width="589px" style="border-radius: 20px;">
                </div>
                <div class="col-xl col-xxl-6 align-self-center">
                    <div class="title-area">
                        <span class="sec-subtitle">Have Any questions? so plese</span>
                        <h2 class="sec-title">Feel Free to Contact!</h2>
                    </div>
                    <form action="{{ route('contact.store')}}" class="form-style3 layout2 ajax-contact" method="POST">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-6 form-group">
                                <label>First Name <span class="required">(Required)</span></label>
                                <input name="first_name" id="firstname" type="text">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Last Name <span class="required">(Required)</span></label>
                                <input name="last_name" id="lastname" type="text">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Email Address <span class="required">(Required)</span></label>
                                <input name="email" id="email" type="email">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Phone Number <span class="required">(Required)</span></label>
                                <input name="phone_number" id="number" type="number">
                            </div>
                            <div class="col-12 form-group">
                                <label>Message <span class="required">(Required)</span></label>
                                <textarea name="message" id="message" cols="30" rows="10"
                                    placeholder="Type your message"></textarea>
                            </div>
                            <div class="col-auto form-group">
                                <button class="vs-btn" type="submit">Send Message</button>
                            </div>
                            <p class="form-messages">
                                 {{-- success message --}}
                                @if (session('success'))
                                    {{ session('success') }}                      
                                @endif
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!--==============================
    Map Area
    ==============================-->
    <section class=" space-bottom">
        <div class="container">
            <div class="title-area">
                <h2 class="mt-n2">How To Find Us</h2>
            </div>
            <div class="map-style1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4085478.7693087296!2d27.163685112499994!3d0.3911193000000301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177d1974cff0172f%3A0xbf6855be89dba081!2sMityana%20Junior%20Primary%20School!5e0!3m2!1sen!2sug!4v1732533587402!5m2!1sen!2sug" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    

@endsection