<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ToDoList</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@include('inc.messages')
		@yield('content')
	</div>

	<footer id="footer" class="text-center">
		<p>Copyright &copy; 2017 - ToDoList</p>
	</footer>
</body>
</html>