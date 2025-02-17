@extends('layouts.master')
@section('page_title', 'Manage Blog | Admin')
@section('content')


<div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">Manage Blogs</h6>
    </div>

    <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="nav-item">
                <a href="#create-blog" class="nav-link active" data-toggle="tab">Create New Blog</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manage Blogs</a>
                <div class="dropdown-menu dropdown-menu-right">
                    @foreach($blogs as $blog)
                        <a href="#blog{{ $blog->id }}" class="dropdown-item" data-toggle="tab">{{ $blog->title }}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a href="#all-blogs" class="nav-link" data-toggle="tab">All Blogs</a>
            </li>
        </ul>

        <div class="tab-content">
            {{-- Create Blog Form --}}
            <div class="tab-pane show active fade" id="create-blog">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label font-weight-semibold">Blog Title <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input name="title" value="{{ old('title') }}" required type="text" class="form-control" placeholder="Enter Blog Title">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label font-weight-semibold">Blog Image</label>
                                <div class="col-lg-9">
                                    <input name="image" type="file" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label font-weight-semibold">Short Description <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <textarea name="short_description" rows="4" class="form-control" placeholder="Enter Short Description">{{ old('short_description') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label font-weight-semibold">Long Description <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <textarea name="long_description" rows="4" class="form-control" placeholder="Enter Long Description">{{ old('long_description') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label font-weight-semibold">Details <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <textarea name="details" rows="4" class="form-control" placeholder="Enter Blog Details">{{ old('details') }}</textarea>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit Form <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Manage Blogs --}}
            @foreach($blogs as $blog)
                <div class="tab-pane fade" id="blog{{ $blog->id }}">
                    <h5>{{ $blog->title }}</h5>
                    <p><strong>Short Description:</strong> {{ $blog->short_description }}</p>
                    <p><strong>Long Description:</strong> {{ $blog->long_description }}</p>
                    <p><strong>Details:</strong> {{ $blog->details }}</p>
                    @if($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" style="max-width: 100%; height: auto;">
                    @endif
                    <br>
                    {{-- edit the blog --}}
                    <button><a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning">Edit</a></button>
                    {{-- delete an blog --}}
                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    
                </div>
            @endforeach

            {{-- Listing All Blogs --}}
            <div class="tab-pane show fade" id="all-blogs">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container mt-5">
                            <table  class="table datatable-button-html5-columns">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Blog Title</th>
                                        <th>Image</th>
                                        <th>Short Description</th>
                                        
                              
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($blogs as $blog)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $blog->title }}</td>
                                            <td><img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" width="70px"></td>
                                            <td>{{ $blog->short_description }}</td>
                                          
                                          
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No Blogs found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection