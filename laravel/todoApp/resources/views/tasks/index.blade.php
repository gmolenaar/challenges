<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="todoIcon.png">
    <title>todoApp - Laravel</title>
    <link rel="stylesheet" type="text/css" href="../../../css/app.css">
</head>
<body>

<container class="todo-box">
	<section class="to-do column">
	<h1>To-Do</h1>
		<div class="to-do-text">
		@foreach ($tasks as $task)
			@if(!$task->completed)
			<div class="column-individual">
				<h3>{{$task->title}}</h3>
				<p>{{$task->body}}</p>
				<form action="/task/{{$task->id}}" method="post">
				{{ csrf_field() }}
				{{ method_field("PATCH") }}
				<input class="button-input" type="submit" name="change" value="Done">
				</form>
				<form action="/tasks/{{$task->id}}" method="post">
				{{ csrf_field() }}
				{{ method_field("PATCH") }}
				<input class="button-input" type="submit" name="delete" value="Remove">
				</form>
				</div>
			@endif
		@endforeach
		</div>
	</section>

	<section class="to-do-finished column">
		<h1>Completed</h1>
		@foreach ($tasks as $task)
			@if($task->completed)
			<div class="column-individual">
				<h3>{{$task->title}}</h3>
				<p>{{$task->body}}</p>
				<form action="/task/{{$task->id}}" method="post">
				{{ csrf_field() }}
				{{ method_field("PATCH") }}
				<input class="button-input" type="submit" name="change" value="To-Do">
				</form>
				<form action="/tasks/{{$task->id}}" method="post">
				{{ csrf_field() }}
				{{ method_field("PATCH") }}
				<input class="button-input" type="submit" name="delete" value="Remove">
				</form>
				</div>
			@endif
		@endforeach
	</section>

	<section class="to-do-add column">

		<h1>Add task</h1>
		<section class="add-task">
			<form class="form-add-task" action="/tasks/" method="post">
				{{ csrf_field() }}
	  			Add task<br>
		  		<input type="text" name="title" placeholder="title">
			  		<br><br>
			  			Add a comment<br>
			  		<textarea rows="4" name="comment" placeholder="comment"></textarea>
			  		<br><br>
		  		<input class="button-add" type="submit" value="Add">
			</form>
		</section>

	</section>
</container>

</body>
</html>