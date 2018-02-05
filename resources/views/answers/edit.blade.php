@extends('template')

@section('content')
<div class="panel panel-default">	
	<div class="panel-body">
	    <form action="{{route('answers.update', ['answer' => $answer->id] )}}" method="POST">
	    <textarea class="form-control" name="content" id="description" rows="4" > {{$answer->content}} </textarea>
	    <input type="hidden" value="{{ $question->id }}" name="question_id">
	    <input type="submit" class="btn btn-primary" value="Submit answer" />
	    {{ method_field('PUT') }}
	    {{ csrf_field() }}    
	    </form>
    </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

@endsection 