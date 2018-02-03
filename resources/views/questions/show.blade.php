@extends('template')

@section('content')
<div class='container'>
    <h1> {{ $question->title }} </h1>
    <p class='lead'>
	{{ $question->description }}
    </p>
    
    <!-- display all of the answers for this question -->
    
    
    
    <!-- display the form to submit a new answer -->
    <form action="{{ route('answers.store') }}" method="POST">
	{{ csrf_field() }}
	
	<h4> Submit your own answer </h4>
	<textarea class="form-control" name="content" rows="4"></textarea>
	<input type="hidden" value="{{ $question->id }}" name="question_id">
	<button class="btn btn-primary">Submit Answer</button>
	    
    </form>
</div>

@endsection

















