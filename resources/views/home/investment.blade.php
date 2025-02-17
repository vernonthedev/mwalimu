@extends('home.layouts.app')

@section('title', 'Nvuyekure Investments Limited | MJS')

@section('description', 'Nvuyekure Investments Limited is under Mwalimu Junior School...')

@section('content')

    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="https://fakeimg.pl/1200x600?text=Nvuyekure+Investments">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Nvuyekure Investments</h1>
                <p class="breadcumb-text">Flour Milling Company</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home.index')}}">Home</a></li>
                        <li>Nvuyekure Investments</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--==============================
    Blog Details Area
    ==============================-->
    <section class="vs-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-lg-8">
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <img src="assets/img/nvuye.png" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="far fa-calendar-alt"></i>Nvuyekure</a>
                    
                            </div>
                            <h2 class="blog-title">Nvuyekure Investments: Your Trusted Partner in Quality Milling and Cereal Distributions</h2>
                            <p>Nvuyekure Investments is a premier agricultural enterprise specializing in the milling and distribution of high-quality maize flour, cassava flour, rice, and other cereals. With a commitment to excellence and a passion for delivering nutritious staples to our customers, we have become a trusted name in the agricultural and food industry.
                            </p>
                            <p class="mb-30">What We Offer
Maize Flour Milling and Distribution: We produce premium maize flour, rich in nutrients, ensuring freshness and quality in every package.
Cassava Flour Processing: Our finely milled cassava flour is a versatile and gluten-free alternative for baking and cooking needs.
Rice Supply: Sourced from the finest farms, our rice is carefully processed to meet the highest quality standards.
Other Cereal Products: From millet to sorghum, we cater to diverse customer needs with a range of cereal-based products.</p>
                            <div class="row align-items-center">
                                <div class="col-xl">
                                    <div class="list-style1">
                                        <ul class="list-unstyled">
                                            <h5>Why Choose Nvuyekure?</h5>
                                            <li>State-of-the-Art Milling Technology: We use advanced machinery to ensure consistent quality and precision in our milling processes.</li>
                                            <li>Commitment to Quality: Our products are thoroughly inspected to meet both local and international standards.</li>
                                            <li>Reliable Distribution: With an efficient supply chain, we ensure timely delivery to our clients, from small retailers to large distributors.</li>
                                            <li>Customer-Centric Service: We value our clients and strive to meet their specific needs with flexibility and professionalism.</li>
                               
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-auto">
                                    <div class="mb-30 mega-hover"><img src="https://fakeimg.pl/340x290?text=Nvuye" alt="blog"
                                            class="w-100"></div>
                                </div>
                            </div>
                            <p class="mb-30">Experience the Nvuyekure Investments difference! Reach out to us for inquiries or orders:.</p>
                            <div class="mega-hover mb-30">
                                <img src="https://fakeimg.pl/846x458?text=Nvuyekure" alt="blog video">
                                <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                    class="play-btn popup-video position-center"><i class="fas fa-play"></i></a>
                            </div>
                            <p>Nvuyekure Investments is a premier agricultural enterprise specializing in the milling and distribution of high-quality maize flour, cassava flour, rice, and other cereals. With a commitment to excellence and a passion for delivering nutritious staples to our customers, we have become a trusted name in the agricultural and food industry.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mega-hover mb-30"><img src="https://fakeimg.pl/408x288?text=Nvuyekure" alt="blog">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mega-hover mb-30"><img src="https://fakeimg.pl/408x288?text=Nvuyekure" alt="blog">
                                    </div>
                                </div>
                            </div>
                            <p>Contact Us
Experience the Nvuyekure Investments difference! Reach out to us for inquiries or orders:

Phone: 0754600386, 0757956042
                            </p>
                        </div>
                 
                        <div class="blog-author  ">
                            <div class="media-img">
                                <img src="https://fakeimg.pl/408x288?text=Nvuyekure" alt="Blog Author Image">
                            </div>
                            <div class="media-body">
                                <p class="author-degi">Founded by</p>
                                <h3 class="author-name h4"><a class="text-inherit" href="#">Mr. Amanya Bob</a></h3>
                                <p class="author-text">Experience the Nvuyekure Investments difference! Reach out to us for inquiries or orders:</p>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_search   ">
                            <h3 class="widget_title">Search</h3>
                            <form class="search-form">
                                <input type="text" placeholder="Search Here">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>

                        <!-- <div class="widget  ">
                            <h4 class="widget_title">Photos Gallery</h4>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gal-1-1.jpg" alt="Gallery Image" class="w-100">
                                    <a href="assets/img/widget/gal-1-1.jpg" class="popup-image gal-btn"><i
                                            class="fal fa-plus"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gal-1-2.jpg" alt="Gallery Image" class="w-100">
                                    <a href="assets/img/widget/gal-1-2.jpg" class="popup-image gal-btn"><i
                                            class="fal fa-plus"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gal-1-3.jpg" alt="Gallery Image" class="w-100">
                                    <a href="assets/img/widget/gal-1-3.jpg" class="popup-image gal-btn"><i
                                            class="fal fa-plus"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gal-1-4.jpg" alt="Gallery Image" class="w-100">
                                    <a href="assets/img/widget/gal-1-4.jpg" class="popup-image gal-btn"><i
                                            class="fal fa-plus"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gal-1-5.jpg" alt="Gallery Image" class="w-100">
                                    <a href="assets/img/widget/gal-1-5.jpg" class="popup-image gal-btn"><i
                                            class="fal fa-plus"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gal-1-6.jpg" alt="Gallery Image" class="w-100">
                                    <a href="assets/img/widget/gal-1-6.jpg" class="popup-image gal-btn"><i
                                            class="fal fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget_tag_cloud   ">
                            <h3 class="widget_title">Upcoming Events</h3>
                            <div class="vs-event-widget">
                                <div class="recent-event">
                                    <a href="event-details.html" class="event-date"><span class="month">Dec</span>24</a>
                                    <div class="media-body">
                                        <h4 class="event-title"><a href="event-details.html"
                                                class="text-inherit">Father`s Day Sundaes & Shaving!</a></h4>
                                    </div>
                                </div>
                                <div class="recent-event">
                                    <a href="event-details.html" class="event-date"><span class="month">Dec</span>24</a>
                                    <div class="media-body">
                                        <h4 class="event-title"><a href="event-details.html"
                                                class="text-inherit">Father`s Day Sundaes & Shaving!</a></h4>
                                    </div>
                                </div>
                                <div class="recent-event">
                                    <a href="event-details.html" class="event-date"><span class="month">Dec</span>24</a>
                                    <div class="media-body">
                                        <h4 class="event-title"><a href="event-details.html"
                                                class="text-inherit">Father`s Day Sundaes & Shaving!</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div> -->


                        <div class="widget bg-vs-secondary  " data-bg-src="assets/img/bg/widget-bg-1-1.png">
                            <h4 class="mt-n2 text-white">Join together to make amazing things happen</h4>
                            <p class="mb-4 pb-1 text-white">Get all the latest information, support and guidance about
                                the cost of living with kindergarten.</p>
                            <a href="{{ route('contact')}}" class="vs-btn">Start Registration</a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    
@endsection