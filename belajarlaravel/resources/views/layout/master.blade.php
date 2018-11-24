<<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>
	<header>
		<nav>
			<a href="/">home</a>
			<a href="/blog">blog</a>
		</nav>
	</header>
	<br>


	@yield('content')
	<br>

	<footer>
		<p>
		&copy: laravel & belajarkoding 2018
		</p>
	</footer>

</body>
</html>