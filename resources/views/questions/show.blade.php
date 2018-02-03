@extends('template')

@section('content')
<div class='container'>
    <h1> {{ $question->title }} </h1>
    <p class='lead'>
	{{ $question->description }}
    </p>
    
    <!-- display all of the answers for this question -->
    @if($question->answers->count() >0)
    
    @foreach($question->answers as $answer)
    <div class="panel-body">
	  <p>
	{{ $answer->content }}
	  </p>
    </div>
    @endforeach
    @else
	<p>
	    There are no answer to this question yet. Please...
	</p>
    @endif
    
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

















