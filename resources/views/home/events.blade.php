@extends('home.layouts.app')

@section('title', 'Events | Mwalimu Junior School')
@section('description', 'Mwalimu Junior School is ...')

@section('content')

  <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{asset('assets/images/mwalimuImage-no.12.JPG')}}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">School Events</h1>
                <p class="breadcumb-text">Montessori Is A Nurturing And Holistic Approach To Learning</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home.index')}}">Home</a></li>
                        <li>Our Nurturing Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--==============================
    Events Area
    ==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($events as $event)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="event-style2">
                            <h3 class="event-title h5"><a class="text-inherit" href="#">{{ $event->name }}</a></h3>
                            <div class="event-img">
                                <div class="img">
                                    <a href="#">
                                        <!-- Display event image -->
                                        <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->name }}">
                                    </a>
                                </div>
                                <span class="event-number">{{ $loop->iteration }}</span>
                            </div>
                            <p class="event-info">Date: <span class="info">{{ \Carbon\Carbon::parse($event->date)->format('d M, Y') }}</span></p>
                            <p class="event-details">{{ $event->details }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
    
            <!-- Pagination -->
            <div class="text-center">
                <div class="vs-pagination pt-md-3">
                    {{ $events->links() }}  <!-- Pagination links -->
                </div>
            </div>
        </div>
    </section>

@endsection