<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/x-icon" href="/images/logo/{{ $profile->logo }}">
		<title>Beranda | Songkok Marwah</title>
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/css/custom.css" />
		<!-- icon bootstrap -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
	</head>
	<body>
        @include('profile.layouts.navbar')

		@yield('content')

		@include('profile.layouts.footer')

		<script src="/js/profile.js"></script>
		<script src="/bootstrap/js/bootstrap.js"></script>
	</body>
</html>
