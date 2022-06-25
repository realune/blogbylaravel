@extends('layout')
@section('title', 'blogs')
@section('content')
<div class="row justify-content-md-center">
    @if (session('err_msg'))
        <p class="text-danger">
            {{ session('err_msg') }}
        </p>
    @elseif (session('success_msg'))
        <p class="text-success">
            {{ session('success_msg') }}
        </p>
    @endif
    @foreach($blogs as $blog)
    <!-- Blog entries-->
    <div class="col-lg-9">
        <!-- Featured blog post-->
        <div class="card mb-4">
            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg"
                    alt="..." /></a>
            <div class="card-body">
                <div class="small text-muted">{{ $blog->created_at }}</div>
                <h2 class="card-title">{{ $blog->title }}</h2>
                <p class="card-text">{{ $blog->content }}</p>
                <a class="btn btn-primary" href="blog/{{ $blog->id }}">Read more →</a>
                <button type="button" class="btn btn-primary" onclick="location.href='blog/edit/{{ $blog->id }}'">Edit</button>
                <form method="POST" action="{{ route('delete', $blog->id) }}" onSubmit="return checkDelete()">
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-lg-6">
        <!-- Pagination-->
        <nav aria-label="Pagination">
            <hr class="my-0" />
            <ul class="pagination justify-content-center my-4">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"
                        aria-disabled="true">Newer</a></li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                <li class="page-item"><a class="page-link" href="#!">15</a></li>
                <li class="page-item"><a class="page-link" href="#!">Older</a></li>
            </ul>
        </nav>
    </div>
</div>
<script>
function checkDelete(){
if(window.confirm('Are you sure you want to delete this?')){
    return true;
} else {
    return false;
}
}
</script>
@endsection