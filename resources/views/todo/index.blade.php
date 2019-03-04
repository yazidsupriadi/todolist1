@extends('todo.layout')

@section('content')
<div id="myDIV" class="header">
  <h2 style="margin:5px">My To Do List</h2>

<form action="{{route('create')}}" method="get">

  <input type="text" name="task" placeholder="title">
  <input type="submit" value="add" class="addBtn">
  {{csrf_field()}} 	

</form>
</div>

<ul id="myUL">
	@foreach($tasks as $task)
		<li onclick="location.href='{{route('update',['id' => $task->id])}}'" 
			@if($task->status) class="checked" @endif>{{$task->content}}<a href="{{route('delete',['id' => $task->id])}}" class="close">x</a></li>
	@endforeach
</ul>
@endsection