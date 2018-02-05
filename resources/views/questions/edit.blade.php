@extends('template')

@section('content')
    <div class="container">
      <h1>Edit your Question:</h1>
      <hr />
      <form action="{{route('questions.update', ['question' => $question->id])}}" method="POST">
        <label for="title">Question:</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $question->title }}"/>

        <label for="description">More Information:</label>
        <textarea class="form-control" name="description" id="description" rows="4" value="{{ $question->description }}" ></textarea>
        <input type="submit" class="btn btn-primary" value="Submit Question" />
	{{ method_field('PUT') }}
	{{ csrf_field() }}
      </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

@endsection 