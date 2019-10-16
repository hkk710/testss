<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	Welcome to the login page!
	<form action="{{ route('login') }}" method="POST">
		@csrf
		<input type="text" name="email" />
		<input type="password" name="password" />
		<input type="submit" />
	</form>
	@if ($errors->count() > 0)
		@foreach ($errors->all() as $error)
			{{ $error }}
		@endforeach
	@endif
</body>
</html>