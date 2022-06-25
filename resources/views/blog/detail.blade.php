@extends('layout')
@section('title', 'blog detail')
@section('content')
<div class="row justify-content-md-center">
    <!-- Blog entries-->
    <div class="col-lg-9">
        <!-- Featured blog post-->
        <h2>{{ $blog->title }}</h2>
        <span>
            Created:  {{ $blog->created_at }}  
            Updated:  {{ $blog->updated_at }}
        </span>
        <div class="card mb-4">
            <div class="card-body">
                <p class="card-text">{{ $blog->content }}</p>
            </div>
        </div>
    </div>
</div>
@endsection