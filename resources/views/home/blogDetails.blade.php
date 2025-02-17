@extends('home.layouts.app')

@section('title', 'Blog Details')
@section('description', 'Mwalimu Junior School is ...')

@section('content')

    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Blog Details</h1>
            <p class="breadcumb-text">{{ $blog->title }}</p>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>{{ $blog->title }} | Details</li>
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
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="#"><i class="far fa-calendar-alt"></i>{{ $blog->created_at->format('F j, Y') }}</a>
                         
                        </div>
                        <h2 class="blog-title">{{ $blog->title }}</h2>
                        <p>{{ $blog->short_description}}
                        </p>
                        <p class="mb-30">More Details</p>
                        <p>{{ $blog->long_description}}</p>

                        <p class="mb-30">In Details</p>
                        <p>{{ $blog->details}}</p>
                    </div>
            
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_search   ">
                        <h3 class="widget_title">Search</h3>
                        <form class="search-form">
                            @csrf
                            <input type="text" placeholder="Search Here">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    {{-- <div class="widget  ">
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
                    </div> --}}
                </aside>
            </div>
        </div>
    </div>
</section>

@endsection