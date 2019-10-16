<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
	<form action="{{ route('register') }}" method="POST">
		@csr
		<input type="text" name="name" placeholder="name" />
		<input type="email" name="email" placeholder="email" />
		<input type="password" name="password" placeholder="password" />
		<input type="password" name="password_confirmation" placeholder="Confirm password" />
		<input type="submit">
	</form>

	@if ($errors->isNotEmpty())
		@foreach ($errors->all() as $error)
			{{ $error }}
		@endforeach
	@endif
</body>
</html>