<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	
	?>
	<form method="POST" action="/todos">
		@csrf
		<h1>Create Todo</h1>
		<input type="text" name="name">
		<br>
		<input type="" name="category">
		<br>
		<input type="" name="price">
		<br>
		<button type="submit">Submit</button>
	</form>

</body>
</html>