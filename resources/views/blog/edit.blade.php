@extends('layout')
@section('title', 'blog edit')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>Edit</h2>
        <form method="POST" action="{{ route('update') }}" onSubmit="return checkSubmit()">
        @csrf
            <input type="hidden" name="id" value="{{ $blog->id }}">
            <div class="form-group">
                <label for="title">
                    Title
                </label>
                <input
                    id="title"
                    name="title"
                    class="form-control"
                    value="{{ $blog->title }}"
                    type="text"
                >
                @if ($errors->has('title'))
                    <div class="text-danger">
                        {{ $errors->first('title') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="content">
                    content
                </label>
                <textarea
                    id="content"
                    name="content"
                    class="form-control"
                    rows="4"
                >{{ $blog->content }}</textarea>
                @if ($errors->has('content'))
                    <div class="text-danger">
                        {{ $errors->first('content') }}
                    </div>
                @endif
            </div>
            <div class="mt-5">
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
                <a class="btn btn-secondary" href="{{ route('blogs') }}">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
<script>
function checkSubmit(){
if(window.confirm('Are you sure you want to update this?')){
    return true;
} else {
    return false;
}
}
</script>
@endsection