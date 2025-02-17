@extends('home.layouts.app')

@section('title', 'Blogs | Mwalimu Junior School')
@section('description', 'Mwalimu Junior School is ...')

@section('content')

   <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">News Articles</h1>
                <p class="breadcumb-text">The Future Begins Now</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home.index')}}">Home</a></li>
                        <li>Our News Articles</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--==============================
    Blog Area
    ==============================-->
    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-lg-8">
                    @foreach ($blogs as $blog)
                        <div class="vs-blog blog-single has-post-thumbnail">
                            <div class="blog-img">
                                <a href="{{ route('blog.show', $blog->id) }}">  <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->name }}"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href=""><i class="far fa-calendar-alt"></i>{{ $blog->created_at->format('F j, Y') }}</a>
                                </div>
                                <h2 class="blog-title"><a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a></h2>
                                <p class="blog-text">{{ $blog->short_description}}</p>
                                <a href="{{ route('blog.show', $blog->id) }}" class="vs-btn style2">Read More</a>
                            </div>
                        </div>
                    @endforeach
                  
                    <div class="vs-pagination  ">         
                        <!-- Pagination -->
                        <div class="text-center">
                            <div class="vs-pagination pt-md-3">
                                {{ $blogs->links() }}  <!-- Pagination links -->
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        {{-- <div class="widget widget_search   ">
                            <h3 class="widget_title">Search</h3>
                            <form class="search-form">
                                @csrf
                                <input type="text" placeholder="Search Here">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div> --}}
                        <div class="widget widget_categories   ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                               
                                <li>
                                    <a href="#">Kindergarten Section</a>
                                </li>
                                <li>
                                    <a href="#">Primary Section</a>
                                </li>
                            </ul>
                        </div>
           
                        <div class="widget bg-vs-secondary  " data-bg-src="assets/img/bg/widget-bg-1-1.png">
                            <h4 class="mt-n2 text-white">Join together to make amazing things happen</h4>
                            <p class="mb-4 pb-1 text-white">Get all the latest information, support and guidance about
                                the cost of living with kindergarten.</p>
                            <a href="{{route('contact')}}" class="vs-btn">Start Registration</a>
                        </div>
                    </aside>



                </div>
            </div>
        </div>
    </section>
    
    

@endsection