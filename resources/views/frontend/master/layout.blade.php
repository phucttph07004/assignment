
<!DOCTYPE html>
<html lang="en">
<body>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=1166349150203041&autoLogAppEvents=1"></script>
	{{-- <div id="header">
		<div class="header">
			<div class="bg-header">

				<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
					<div class="container">
						<a class="navbar-brand" href="">
							<img src="/image/logo.png" alt="logo" height="50" class="logo">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse menu-cus" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item">
									<a class="nav-link" href="">Trang chủ</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="chuong-trinh-hoc">Chương trình học</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="tin-tuc">Tin tức - sự kiện</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="">Tuyển sinh</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="">Giới thiệu</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="lien-he">Liên hệ</a>
								</li>
							</ul>
							
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div> --}}
    @include('frontend.master.header')
	@yield('content')
	@include('frontend.master.footer')