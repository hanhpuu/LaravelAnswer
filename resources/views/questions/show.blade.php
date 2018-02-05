@extends('template')

@section('content')
<div class='container'>
    @if(isset($success))
    <h1>{{ $success}}</h1>
    @endif
    <h1> {{ $question->title }} </h1>
    <p class='lead'>
	{{ $question->description }}
    </p>
    <p>
	Submitted by: {{ $question->user->name }} on {{ $question->created_at->diffForHumans() }}
	<br/>
	Last edited on {{ $question->updated_at->diffForHumans() }}
    </p>
    @if(!Auth::guest())
	@if(Auth::user()->id == $question->user_id)
	<a href="/questions/{{$question->id}}/edit" class="btn btn-default"> Edit </a> 
	@endif
    @endif
    <hr/>
    <!-- display all of the answers for this question -->
    @if($question->answers->count() >0)
    
    @foreach($question->answers as $answer)
    <div class="panel panel-default">	
	<div class="panel-body">
	    
	    @if(isset($successans))
	    <h6>{{ $successans}}</h6>
	    @endif
	      <p>
	    {{ $answer->content }}
	      </p>
	      <h6> Answered by {{ $answer->user->name }} on {{ $answer->created_at->diffForHumans() }}</h6>
	      <h6> Last edited on {{ $answer->updated_at->diffForHumans() }}</h6>
	      @if(!Auth::guest())
		@if(Auth::user()->id == $answer->user_id)
		<a href="/answers/{{$answer->id}}/edit" class="btn btn-default"> Edit </a> 
		@endif
	    @endif
    
	</div>
	
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

















