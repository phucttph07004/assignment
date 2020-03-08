<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="{{ asset("") }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i&display=swap" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,700i,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/library/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/library/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="/library/slick/css/slick.css">
	<link rel="stylesheet" href="/library/slick/css/slick-theme.css">
	<link rel="stylesheet" href="/library/wowjs/animate.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/plan.css">
	<link rel="stylesheet" href="/css/rent.css">
	<link rel="stylesheet" href="/css/contact.css">
	<link rel="stylesheet" href="/css/about-us.css">
	<link rel="stylesheet" href="/css/plan-detail.css">
	<link rel="stylesheet" href="/css/news.css">
</head>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=1166349150203041&autoLogAppEvents=1"></script>
	<div id="header">
		<div class="header">
			<div class="bg-header">

				<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
					<div class="container">
						<a class="navbar-brand" href="">
							<img src="images/about-1.png" alt="logo" height="50" class="logo">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse menu-cus" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item">
								<a class="nav-link" href="home">Trang chủ</a>
								</li>


								@if(Auth::check())
								<li class="nav-item">
								<a class="nav-link" href="{{ route('users.index') }}"> Post Cá Nhân</a>
								</li>
								@else
								<li class="nav-item">
									<a class="nav-link" href="{{ route('users.index') }}"> Post Cá Nhân</a>
								</li>
								@endif
								<li class="nav-item">
									<a class="nav-link" href="{{ route('users.create') }}"> Đăng Bài</a>
								</li>
								@if(Auth::check())
								<li class="nav-item">
									<a class="nav-link" href="{{ route('userprofile.show',Auth::user()->id) }}">Hồ Sơ</a>
								</li>
								@else
								<li class="nav-item">
									<a class="nav-link" href="{{ route('userprofile.show',0) }}">Hồ Sơ</a>
								</li>
								@endif
								<li class="nav-item">
									<a class="nav-link" href="lien-he"></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="lien-he"></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="lien-he"></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="lien-he"></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="lien-he"></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="lien-he"></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="lien-he"></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="lien-he"></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="lien-he"></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="lien-he"></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="lien-he"></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="lien-he"></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="lien-he"></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="lien-he"></a>
								</li>

								
								@if(Auth::check())
								<li class="nav-item">
								<a style="color: red" class="nav-link" href="lien-he">{{ Auth::User()->name }}</a>
								</li>
								<li class="nav-item">
								<a style="color: red" class="nav-link" href="{{ route('auth.logout') }}">Logout</a>
								</li>
								@else
								<li class="nav-item">
									<a style="color: red; margin-left: 100px" class="nav-link" href="registration">Đăng Ký</a>
								</li>
								<li class="nav-item">
									<a style="color: red; margin-left: 10px" class="nav-link" href="login">Đăng Nhập</a>
								</li>
								@endif
								
							</ul>
							
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>