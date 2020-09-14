
@extends('layouts.layout')
@section('content')
		


	<div class="row">

		<div class="col-lg-12">

			<form action="{{route('todos.save',['id'=>$todo->id])}}" method="POST">
				@csrf
		<input type="text"  name="todo" class="form-control input-lg " value="{{$todo->todo}}" placeholder="Create a new todo ">
		
			
		</form>

		</div>
		
	</div>

	
@endsection
           
