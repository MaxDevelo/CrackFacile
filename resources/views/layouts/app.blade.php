<lin<!DOCTYPE html>
	<html lang="fr">


	<head>
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3000475096741418" crossorigin="anonymous"></script>
		<script src=”https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js”></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src=”https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js”></script>
		<link rel="stylesheet" type="text/css" href="@yield('file_css')" />
		<link rel="stylesheet" type="text/css" href="css/styles2.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/styleads.css" />
		<meta name="robots" content="index, follow">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="trustpilot-one-time-domain-verification-id" content="699a60e9-752f-4b48-93f0-3832796e7edd" />
		<meta name="language" content="French">
		<meta name="language" content="English">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3000475096741418" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- TrustBox script -->
		<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
		<!-- End TrustBox script -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>@yield('title')</title>
		<link class="favicon" rel="icon" type="image/x-icon" sizes="16x16 32x32" href="/img/logo/logo.png">
		<meta name="description" content="@yield('description')" />
		<meta name="title" content="@yield('titlecontent')">
		<style>
			.m-red {
				background: #E54556;
				color: #fff;
				text-decoration: none;
			}

			.m-bar {
				width: 85%;
				min-width: 600px;
				max-width: 1200px;
				height: 55px;
				display: inline-block;
				margin-top: 20px;
				text-align: left;
			}

			.m-bar a.m-close {
				display: inline-block;
				color: #fff;
				text-decoration: none;
				overflow: hidden;
				margin-right: 10px;
			}

			.m-bar a.m-close i {
				margin-top: 15px;
			}

			.m-bar a.m-microphone {
				float: left;
				margin-top: 15px;
				margin-left: 10px;
				cursor: default;
			}

			.m-bar a.m-content {
				font-size: 13.5px;
				font-family: "Noto Sans", sans-serif;
				margin-left: 5px;
				line-height: 54px;
				display: inline-block;
			}
		</style>

	</head>

	<body>
		<div class="navbar">
			<div class="inner_navbar">
				<div class="logo">
					<a href="{{route('home')}}"><span>Crack</span>Facile<span style="font-size:20px;color:white">®️</span></a>
				</div>
				<div class="menu">
					<ul>
						<li><a href="{{route('home')}}">Home</a></li>
						<li><a href="{{route('listgames')}}"><i class="fa fa-gamepad"></i>Jeux</a></li>
						<li><a href="{{route('listsoftwares')}}">Logiciels</a></li>
						<li><a href="{{route('faq')}}"><i class="fa fa-question-circle"></i>FAQ</a></li>

					</ul>
				</div>
			</div>
			<div class="hamburger">
				<i class="fa fa-bars"></i>
			</div>
		</div>

		@section('main')

		@show

		<footer>
			<p class="copyright"> Rejoind notre <a style="color:red" target="_blank" href="https://discord.gg/EMRBMhjA5K">discord</a> pour ne rien louper ! </p>
		</footer>

		<script src="/js/navbar.js"></script>
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] || function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o),
					m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
			ga('create', 'UA-67816487-1', 'auto');
			ga('send', 'pageview');
		</script>
	</body>

	</html>