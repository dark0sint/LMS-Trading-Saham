@extends('layouts.app')

@section('content')
<h1>Dashboard</h1>
<h2>Your Enrolled Courses</h2>
<ul class="list-group">
    @foreach($courses as $course)
        <li class="list-group-item">
            {{ $course->title }} - Progress: {{ $course->pivot->progress }}%
            <a href="{{ route('courses.show', $course) }}" class="btn btn-sm btn-primary">Continue</a>
        </li>
    @endforeach
</ul>
@endsection
