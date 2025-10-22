@extends('layouts.app')

@section('content')
<h1>{{ $quiz->title }}</h1>
<form method="POST" action="{{ route('quizzes.submit', $quiz) }}">
    @csrf
    @foreach($quiz->questions as $question)
        <div class="mb-3">
            <p>{{ $question->question }}</p>
            @foreach($question->options as $option)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer_{{ $question->id }}" value="{{ $option }}">
                    <label class="form-check-label">{{ $option }}</label>
                </div>
            @endforeach
        </div>
    @endforeach
    <button type="submit" class="btn btn-primary">Submit Quiz</button>
</form>
@endsection
