<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Title</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('assets/css/style.css') }}
	@yield('styles')
	{{ HTML::script('assets/js/modernizr.min.js' ) }}
	@yield('scripts')
</head>
<body>
	<div class="wrapper">
		<header>
			<h1><a href="{{ URL::base() }}" title="Project">Project</a></h1>
			<h2>Headline</h2>

			<p class="intro-text" style="margin-top: 45px;">
			</p>
		</header>
		<div role="main" class="main">
			<div class="home">
{{$content}}
			</div>
		</div>
	</div>
	{{ HTML::script('assets/js/jquery.min.js' ) }}
	{{ HTML::script('assets/js/plugins.js' ) }}
	{{ HTML::script('assets/js/script.js' ) }}
</body>
</html>
