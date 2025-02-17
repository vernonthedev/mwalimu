@extends('home.layouts.app')

@section('title', 'About Us | Mwalimu Junior School')
@section('description', 'Mwalimu Junior School is ...')

@section('content')

  
    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/images/mwalimuImage-no.10.JPG')}}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <p class="breadcumb-text text-white">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home.index')}}">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--==============================
   About Area  
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-between flex-row-reverse">
                <div class="col-lg-6 col-xl-auto text-center text-lg-end">
                    <div class="img-box2">
                        <div class="transform-banner"><img src="{{ asset('assets/images/mwalimuImage-no.7.JPG')}}" width="600px" alt="about"></div>
                        <div class="vs-circle jump"></div>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <h2 class="sec-title me-xxl-5">Your child's best start in life</h2>
                    <p class="sec-text col-xl-10 pe-4 mb-4">We are constantly expanding the range of services offered,
                        taking children of all ages. Our goal is to carefully educate and develop a fun way. We strive
                        to turn the learning process.</p>
                    <div class="row justify-content-center justify-content-lg-start text-start">
                        <div class="col-auto">
                            <div class="list-style1">
                                <ul class="list-unstyled">
                                    <li>Comprehensive reporting on individual achievement</li>
                                    <li>Educational field trips and school presentations</li>
                                    <li>Individual attention in a small-class setting</li>
                                    <li>Learning program with after-school care</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
    About Area  
    ==============================-->
    <section class=" space-extra-bottom">
        <div class="container">
            <div class="row gx-70">
                <div class="col-lg-6 text-center text-lg-end">
                    <div class="img-box2 style2">
                        <div class="transform-banner"><img src="{{ asset('assets/images/mwalimuImage-no.1.jpg')}}" alt="about" width="610px"></div>
                        <div class="vs-circle jump"></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center text-center text-lg-start">
                    <h2 class="sec-title pe-xxl-4">For every student, every classroom Real results.</h2>
                    <p class="sec-text mb-4 pb-2 col-xxl-10">We are constantly expanding the range of services offered,
                        taking children of all ages. Our goal is to carefully educate and develop a fun way. We strive
                        to turn the learning process.</p>
                    <p class="sec-subtitle2 mb-1">Sessions: Monday – Friday</p>
                    <div class="row gx-50 justify-content-center justify-content-lg-start">
                        <div class="col-auto">
                            <div class="info-style1">
                                <p class="info-title">Morning:</p>
                                <p class="info-text">9am – 12noon</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="info-style1">
                                <p class="info-title">Lunch:</p>
                                <p class="info-text">12noon – 1pm</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="info-style1">
                                <p class="info-title">Afternoon:</p>
                                <p class="info-text">1pm – 3.30pm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .section-video {
  width: 100%;
  height: 100%; 
  object-fit: cover; 
  display: block;
}

    </style>

    <section class="space-top space-extra-bottom bg-smoke">
        <video autoplay loop muted playsinline class="section-video">
          <source src="{{ asset('assets/video/advert.webm') }}" type="video/webm">
          Your browser does not support HTML5 video.
        </video>
      </section>
      
    
    
    
    
    <!--==============================
   
    History Area
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="title-area text-center">
                <span class="sec-subtitle">Mwalimu Junior School History</span>
                <h2 class="sec-title">Our History</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3 feature-style4">
                    <div class="feature-body">
                        <span class="feature-year">2010</span>
                        <h3 class="feature-title h5"> Founding of the School</h3>
                        <p class="feature-text">Mwalimu Junior School was established in 2010 with a mission to provide quality education to young learners in a nurturing and stimulating environment. Starting with just two classrooms, the school quickly became a beacon of hope for education in the community.</p>
                        <div class="feature-img">
                            <a href="#"><img src="{{ asset('assets/images/mwalimu (9).jpg')}}" alt="Mwalimu Junior School Compound Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 feature-style4">
                    <div class="feature-body">
                        <span class="feature-year">2015</span>
                        <h3 class="feature-title h5">Expansion and Growth</h3>
                        <p class="feature-text">By 2015, Mwalimu Junior School had expanded significantly, adding new classrooms, a library, and a computer lab. This growth allowed the school to accommodate more students and introduce innovative teaching methods, solidifying its reputation as a leading educational institution</p>
                        <div class="feature-img">
                            <a href="#"><img src="{{ asset('assets/images/mwalimu (1).jpg')}}" alt="Mwalimu Junior School Compound Images"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 feature-style4">
                    <div class="feature-body">
                        <span class="feature-year">2018</span>
                        <h3 class="feature-title h5">Introduction of Extracurricular Programs</h3>
                        <p class="feature-text">In 2018, the school introduced a variety of extracurricular programs, including sports, music, and drama. These programs aimed to provide holistic development for students, fostering creativity and teamwork beyond the classroom</p>
                        <div class="feature-img">
                            <a href="#"><img src="{{ asset('assets/images/mwalimu (6).jpg')}}" alt="Mwalimu Junior School Compound Images"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 feature-style4">
                    <div class="feature-body">
                        <span class="feature-year">2023</span>
                        <h3 class="feature-title h5">Digital Transformation and Modern Facilities</h3>
                        <p class="feature-text">In 2023, Mwalimu Junior School embraced digital learning by integrating smart classrooms and online resources. With state-of-the-art facilities and a forward-thinking curriculum, the school continues to empower learners for the future</p>
                        <div class="feature-img">
                            <a href="#"><img src="{{ asset('assets/images/mwalimu (7).jpg')}}" alt="Mwalimu Junior School Compound Images"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
    Feature Area  
    ==============================-->
    <section class=" space-extra-bottom">
        <div class="container">
            <div class="title-area text-center">
                <div class="sec-bubble">
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                </div>
                <h2 class="sec-title">Available Clubs</h2>
                <p class="sec-text">We are constantly expanding the range of services offered</p>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-xl-auto order-2 order-xl-1">
                    <div class="feature-style3">
                        <div class="feature-img">
                            <div class="img"><img src="{{ asset('assets/images/pathfinder.png')}}" alt="Clubs at Mwalimu Junior School Mityana"></div>
                        </div>
                        <div class="feature-body">
                            <h3 class="feature-title h4">Pathfinder Club</h3>
                            <div class="list-style2">
                                <ul class="list-unstyled">
                                    <li>Pathfinder &amp; Adventurer Club</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="feature-style3">
                        <div class="feature-img">
                            <div class="img"><img src="{{ asset('assets/images/mwalimuImage-no.8.jpg')}}" alt="Clubs at Mwalimu Junior School Mityana"></div>
                        </div>
                        <div class="feature-body">
                            <h3 class="feature-title h4">Drama Club</h3>
                            <div class="list-style2">
                                <ul class="list-unstyled">
                                    <li>Music, Dance and Drama Club</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-auto order-1 order-xl-2">
                    {{-- <img src="https://fakeimg.pl/382x442" alt="feature" class="w-100"> --}}
                    <img src="{{ asset('assets/img/mwalimu.png')}}" alt="feature" width="382px">
                </div>
                <div class="col-md-6 col-xl-auto  order-3 order-xl-3">
                    <div class="feature-style3">
                        <div class="feature-img">
                            <div class="img"><img src="{{ asset('assets/images/mwalimuImage-no.4.jpg')}}" alt="Clubs at Mwalimu Junior School Mityana"></div>
                        </div>
                        <div class="feature-body">
                            <h3 class="feature-title h4">Home Management </h3>
                            <div class="list-style2">
                                <ul class="list-unstyled">
                                    <li>Home management Club</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="feature-style3">
                        <div class="feature-img">
                            <div class="img"><img src="{{ asset('assets/images/mwalimu (11).jpg')}}" alt="Clubs at Mwalimu Junior School Mityana"></div>
                        </div>
                        <div class="feature-body">
                            <h3 class="feature-title h4">Mwalimu Sports Club</h3>
                            <div class="list-style2">
                                <ul class="list-unstyled">
                                    <li>Mwalimu Sports Club</li>
                                                               </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
    Counter Area  
    ==============================-->
    <div class=" space-extra-bottom">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6 col-md-6 col-lg-auto">
                    <div class="vs-media media-style1 layout2">
                        <div class="media-icon"><img src="assets/img/icon/coun-1-1.svg" alt="icon"></div>
                        <div class="media-body">
                            <p class="media-label">38</p>
                            <p class="media-title">Student Classrooms</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-auto">
                    <div class="vs-media media-style1 layout2">
                        <div class="media-icon"><img src="assets/img/icon/coun-1-2.svg" alt="icon"></div>
                        <div class="media-body">
                            <p class="media-label">14</p>
                            <p class="media-title">Kids Classes</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-auto">
                    <div class="vs-media media-style1 layout2">
                        <div class="media-icon"><img src="assets/img/icon/coun-1-3.svg" alt="icon"></div>
                        <div class="media-body">
                            <p class="media-label">75</p>
                            <p class="media-title">Outdoor Activities</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-auto">
                    <div class="vs-media media-style1 layout2">
                        <div class="media-icon"><img src="assets/img/icon/coun-1-4.svg" alt="icon"></div>
                        <div class="media-body">
                            <p class="media-label">23</p>
                            <p class="media-title">Loving Teachers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
    Why Choose Us
    ==============================-->
    <section class="bg-vs-secondary space-top space-extra-bottom">
        <div class="container">
            <div class="row text-center text-lg-start">
                <div class="col-lg-5 col-xl-6 mb-n4 mb-lg-0">
                    <div class="title-area">
                        <span class="sec-subtitle text-white">Why Choose Us</span>
                        <h2 class="sec-title text-white">Our Core Values</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="title-area">
                        <p class="sec-text text-white">Mwalimu Junior School aims to provide an exciting, high quality and holistic education through an inspiring broad and engaging curriculum supported by enriching, varied and quality resources. </p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mt-4 pt-2">
                <div class="col-md-6 col-xl-3">
                    <div class="feature-style2">
                        <div class="feature-img">
                            <div class="vs-circle"></div>
                            <img src="{{ asset('assets/images/mwalimu (10).jpg')}}" alt="image" width="80%">
                        </div>
                        <h3 class="feature-title h5"><a href="#" class="text-inherit">Respect</a></h3>
                        <p class="feature-text">We believe in creating a safe, secure learning environment where
respect, honesty, and appreciation of individual differences are fostered.
</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="feature-style2">
                        <div class="feature-img">
                            <div class="vs-circle"></div>
                            <img src="{{ asset('assets/images/mwalimuImage-no.4.jpg')}}" alt="image" width="80%">
                        </div>
                        <h3 class="feature-title h5"><a href="#" class="text-inherit">Collaboration</a></h3>
                        <p class="feature-text">We believe cultivating and maintaining partnerships is
essential.
</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="feature-style2">
                        <div class="feature-img">
                            <div class="vs-circle"></div>
                            <img src="{{ asset('assets/images/mwalimuImage-no.3.jpg')}}" alt="image" width="80%">
                        </div>
                        <h3 class="feature-title h5"><a href="#" class="text-inherit">High expectations</a></h3>
                        <p class="feature-text"> We believe maintaining rigorous standards and high
expectations for all students are key to academic excellence and lifelong
learning.
.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="feature-style2">
                        <div class="feature-img">
                            <div class="vs-circle"></div>
                            <img src="{{ asset('assets/images/mwalimu (6).jpg')}}" alt="image" width="80%">
                        </div>
                        <h3 class="feature-title h5"><a href="#" class="text-inherit">Responsibility</a></h3>
                        <p class="feature-text">We believe that motivating students to become independent learners leads to taking responsibility for their own learning..</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
    Gallery Area
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="title-area text-center">
                        <div class="sec-bubble">
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                        </div>
                        <h2 class="sec-title">See Our School Photo Gallery!</h2>
                        <p class="sec-text">We are constantly expanding the range of services offered</p>
                    </div>
                </div>
            </div>
            <div class="row gx-35 gy-gx filter-active">

                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="{{asset('assets/images/mwalimuImage-no.3.jpg')}}" alt="gallery">
                            <a href="{{asset('assets/images/mwalimuImage-no.3.jpg')}}" class="gallery-btn popup-image"><i
                                    class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="{{asset('assets/images/mwalimu (3).jpg')}}" alt="gallery">
                            <a href="{{asset('assets/images/mwalimu (3).jpg')}}" class="gallery-btn popup-image"><i
                                    class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="{{asset('assets/images/mwalimu (7).jpg')}}" alt="gallery">
                            <a href="{{asset('assets/images/mwalimu (7).jpg')}}" class="gallery-btn popup-image"><i
                                    class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="{{asset('assets/images/mwalimu (8).jpg')}}" alt="gallery">
                            <a href="{{asset('assets/images/mwalimu (8).jpg')}}" class="gallery-btn popup-image"><i
                                    class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="{{asset('assets/images/mwalimu (5).jpg')}}" alt="gallery">
                            <a href="{{asset('assets/images/mwalimu (5).jpg')}}" class="gallery-btn popup-image"><i
                                    class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="{{asset('assets/images/mwalimu (9).jpg')}}" alt="gallery">
                            <a href="{{asset('assets/images/mwalimu (9).jpg')}}" class="gallery-btn popup-image"><i
                                    class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="{{asset('assets/images/mwalimu (10).jpg')}}" alt="gallery">
                            <a href="{{asset('assets/images/mwalimu (10).jpg')}}" class="gallery-btn popup-image"><i
                                    class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="{{asset('assets/images/mwalimu (2).jpg')}}" alt="gallery">
                            <a href="{{asset('assets/images/mwalimu (2).jpg')}}" class="gallery-btn popup-image"><i
                                    class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3 filter-item">
                    <div class="gallery-style1">
                        <div class="gallery-img">
                            <img src="{{asset('assets/images/mwalimu (4).jpg')}}" alt="gallery">
                            <a href="{{asset('assets/images/mwalimu (4).jpg')}}" class="gallery-btn popup-image"><i
                                    class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    
    
    <section class=" space-extra-bottom">
        <div class="container ">
            <div class="row justify-content-between text-center text-md-start">
                <div class="col-md-auto">
                    <div class="title-area">
                        <span class="sec-subtitle">Fees Structure</span>
                        <h2 class="sec-title">Our Fees Structure</h2>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel gx-15 catslider1" data-slide-show="5" data-lg-slide-show="4"
                data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="2">
                <div class="col-xl-3">
                    <div class="category-style1">
                        <div class="category-bg1"></div>
                        <div class="category-bg2"></div>
                        <div class="category-bg3"></div>
                      
                        <h3 class="category-name h4"><a href="#" class="text-inherit"></a>Primary Section</h3>
                        <p class="category-label">Boarding: UGX 620,000</p>
                        <p class="category-label">Day: UGX 350,000</p>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="category-style1">
                        <div class="category-bg1"></div>
                        <div class="category-bg2"></div>
                        <div class="category-bg3"></div>
                  
                        <h3 class="category-name h4"><a href="#" class="text-inherit"></a>Nursery Section</h3>
                        <p class="category-label">Day: UGX 350,000</p>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class=" space-bottom">
        <div class="container">
            <div class="title-area text-center">
                <h2 class="sec-title">Follow Us On @tiktok</h2>
            </div>
            <div class="row vs-carousel" data-slide-show="6" data-lg-slide-show="5" data-md-slide-show="4"
            data-sm-slide-show="3" data-xs-slide-show="2">
            <div class="col-auto">
                {{-- <div class="gallery-style1"> --}}
                    <div class="gallery-img">
                        <a href="https://www.tiktok.com/@mwalimujuniorschools/video/7429699092927745285?is_from_webapp=1&sender_device=pc&web_id=7447580458597074438" target="_blank"> <img src="{{asset('assets/images/tiktok/one (1).png')}}" alt="gallery"></a>
                    {{-- </div> --}}
                </div>
            </div>
            <div class="col-auto">
                {{-- <div class="gallery-style1"> --}}
                    <div class="gallery-img">
                      
                        <a href="https://www.tiktok.com/@mwalimujuniorschools/video/7441896399320419639?is_from_webapp=1&sender_device=pc&web_id=7447580458597074438" target="_blank">  <img src="{{asset('assets/images/tiktok/one (2).png')}}" alt="gallery"></a>
                    </div>
                {{-- </div> --}}
            </div>
            <div class="col-auto">
                {{-- <div class="gallery-style1"> --}}
                    <div class="gallery-img">
                    
                        <a href="https://www.tiktok.com/@mwalimujuniorschools/photo/7460917580656643334?is_from_webapp=1&sender_device=pc&web_id=7447580458597074438">    <img src="{{asset('assets/images/tiktok/one (3).png')}}" alt="gallery"></a>
                    </div>
                {{-- </div> --}}
            </div>
            <div class="col-auto">
                {{-- <div class="gallery-style1"> --}}
                    <div class="gallery-img">
                   
                        <a href="https://www.tiktok.com/@mwalimujuniorschools/photo/7449681635534064902?is_from_webapp=1&sender_device=pc&web_id=7447580458597074438">     <img src="{{asset('assets/images/tiktok/one (4).png')}}" alt="gallery"></a>
                    {{-- </div> --}}
                </div>
            </div>
            <div class="col-auto">
                {{-- <div class="gallery-style1"> --}}
                    <div class="gallery-img">
                 
                        <a href="https://www.tiktok.com/@mwalimujuniorschools/photo/7441685514899541303?is_from_webapp=1&sender_device=pc&web_id=7447580458597074438">       <img src="{{asset('assets/images/tiktok/one (5).png')}}" alt="gallery"></a>
                    </div>
                {{-- </div> --}}
            </div>
            <div class="col-auto">
                {{-- <div class="gallery-style1"> --}}
                    <div class="gallery-img">
                        
                        <a href="https://www.tiktok.com/@mwalimujuniorschools/video/7441590716674870584"><img src="{{asset('assets/images/tiktok/one (6).png')}}" alt="gallery"></a>
                    {{-- </div> --}}
                </div>
            </div>
            <div class="col-auto">
                {{-- <div class="gallery-style1"> --}}
                    <div class="gallery-img">
                       
                        <a href="https://www.tiktok.com/@mwalimujuniorschools/video/7435722510341426487?is_from_webapp=1&sender_device=pc&web_id=7447580458597074438"> <img src="{{asset('assets/images/tiktok/one (7).png')}}" alt="gallery"></a>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
        </div>
    </section>

@endsection