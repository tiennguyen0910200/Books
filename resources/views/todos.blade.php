<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.table{
			text-align: center;
			border:1px solid black;
		}
		th{
			border:1px solid black;
		}
		td{
			border:1px solid black;
		}
		button{
			font-size:15px;
			background:white;
			padding:1.2em 1.4em;
			border:none;
			margin:5px;
			border-radius:6px;
			transition:0.5s;
		}
		body{
			background-image: url('https://i.pinimg.com/originals/66/10/e4/6610e4e08bbc1fed9313cda36e2993a7.jpg'), url('');
		}
	</style>
</head>
<body>
	<center><h1 style="color: red;"><b>BOOKS</b></h1></center>
	<hr>
	<br>
	<br>

	<div>
		<table class="table">
			<tr style="color:blue; font-size: large;font-weight: bold;">
				<td>Name</td>
				<td>Category</td>
				<td>Price</td>
				<td></td>
			</tr>

			@foreach($todos as $todo)


			<tr>
				<th>
					{{ $todo->name}}

				</th>
				<th>
					{{ $todo->category}}
				</th>
				<th>
					{{ $todo->price}}
				</th>
				<th>
					<form method="POST" action="/todos/display/{{$todo->id}}">
						@csrf
						@method("DELETE")
						<button>Delete</button>
					</form>

				</th>
			</tr>






	 <!-- <form action={{ "todos/".$todo->id}} method="">
	 	
	 </form> -->
	 @endforeach
	</table>
</div>

</body>
</html>