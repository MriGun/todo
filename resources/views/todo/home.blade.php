@extends('layout.app')
@section('body')
	<br>
	<br>
	<a href="todo/create" class="btn btn-info">Add New</a>
	<div class="col-lg-4 col-lg-offset-4">
		<center><h1>ToDo Lists</h1></center>
		<ul class="list-group">
		  	<li class="list-group-item ">
		    	@foreach($todos as $todo)
		    	{{$todo->body}}
		    	<span class="pull-right">{{$todo->created_at->diffForHumans()}}</span>
		    	</li>
		    	@endforeach
		    
		</ul>

	</div>

@endsection