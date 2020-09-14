
@extends('layouts.layout')
@section('content')
		
<form action="/create/todo" method="POST">
    {{ csrf_field() }}
    <div class="input-group form-group">
        <input type="text" class="form-control" name="todo" placeholder="Create a new todo " style="float: left">
     </div>
</form>
<!-- 
<form class="form-inline md-form mr-auto mb-4" action=""  role="search" method="get">
                   
		   <input class="form-control mr-sm-2" type="text" style="margin-left: 10px;" name="search" value="{{request('search')}}" placeholder="Search by Name"  aria-label="Search">
		    <button class="btn btn-primary" type="submit">Search</button>
		   <a href="{{url('user/management')}}" class="btn btn-danger" type="submit">Reset</a>
                   </form>
 -->
                   <!-- 

	<div class="row">

		<div class="col-lg-6 col-lg-offset-3 input-group">

			<form action="/create/todo" method="POST" class="form-control">
				@csrf
		<input type="text" name="todo" class="form-control " placeholder="Create a new todo ">

			
		</form>

		</div>
		
	</div>
	 -->

		<!-- <hr>
            @foreach($todos as $todo)

            {{$todo->todo}}
            <a href="{{route('todo.delete',['id'=> $todo->id])}}" class="btn btn-danger btn-sm">Delete</a>
            <a href="{{route('todo.update',['id'=> $todo->id])}}" class="btn btn-info btn-sm">Update</a>
            @if(!$todo->completed)
            <a href="{{route('todos.completed',['id'=>$todo->id])}}" class="btn btn-xs btn-success">Mark as completed</a>
            @else

            <span class="text-success">Completed</span>

            @endif

            
            <hr>

            @endforeach
         --><div class="container">
         <table class="table table-striped">
         	
         	<thead>
         		<tr>
         			<th>Todo Data</th>
         			<th colspan="3">Option</th>
         			
         		</tr>
         	</thead>
         	<tbody>
         		 @foreach($todos as $todo)
         		<tr>
         			<td>  {{$todo->todo}} </td>
         			<td>  <a href="{{route('todo.delete',['id'=> $todo->id])}}" class="btn btn-danger btn-sm">Delete</a></td>
         			<td><a href="{{route('todo.update',['id'=> $todo->id])}}" class="btn btn-info btn-sm">Update</a></td>
         	<td>		 @if(!$todo->completed)
           <a href="{{route('todos.completed',['id'=>$todo->id])}}" class="btn btn-xs btn-success">Mark as completed</a>
            @else
              <span class="text-success">Completed</span>

            @endif
        </td>
         </tr>
         @endforeach
         	</tbody>

         </table>
     </div>
         <br>
       {{ $todos->links()}}

@endsection
           
