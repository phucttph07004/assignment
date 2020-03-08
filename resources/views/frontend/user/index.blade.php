@extends('frontend.master.layout')
@section('title',"User_posts")

@section('content')
<div class="plan">
	<div class="container">
		<h3 class="plan-text">
		</h3>
		<div class="block-search">
			<form class="search-wrapper cf">
				<input type="text" placeholder="Search..." required="">
				<button type="submit">Search</button>
			</form>
		</div>
	</div>
</div>
<div class="news" style="padding-top: 80px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-11">
				<div class="news-list">
					<div class="row">
					@if($posts->total()  <= 0)
						<h1 style="height:400px;color:red;margin:auto;margin-top:80px;font-size:20px">
							Bạn chưa đăng bài viết nào cả
						</h1>
					@else
					@foreach($posts as $value)
					<div class="news-list-block">
						<div class="col-4">
						<a href="{{ route('users.show',$value->id)  }}"><img class="news-img" src="storage/{{ $value->image}}" alt="" width="100%" height="200px"></a>
						</div>
						<div class="col-8 news-text">
							<h4 class="news-list-title"><a href="{{ route('users.show',$value->id)  }}">{{ $value->title }}</a></h4>
							<i class="far fa-calendar-alt"></i>
							<span>{{ date_format($value->created_at,'d/m/Y') }}</span>
							<p>{!! $value->content !!}</p>
						</div>
					</div>
					<hr style="width: 100%;background-color: #ccc">
					@endforeach
					@endif
					</div>
				</div>
			</div>
			<!---- end lien quan -->
		</div>
		
		<!-- Page -->
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
				{{ $posts->links() }}
			</ul>
		</nav>

	</div>
</div>
@endsection

