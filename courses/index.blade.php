@extends('layouts.app')

@section('content')
<h1>Courses</h1>
@auth
    @if(auth()->user()->role == 'instructor' || auth()->user()->role == 'admin')
        <a href="{{ route('courses.create') }}" class="btn btn-primary">Create Course</a>
    @endif
@endauth
<div class="row">
    @foreach($courses as $course)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $course->title }}</h5>
                    <p class="card-text">{{ $course->description }}</p>
                    <a href="{{ route('courses.show', $course) }}" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
