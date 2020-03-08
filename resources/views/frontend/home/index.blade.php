@extends('frontend.master.layout')
@section('title',"Trang Chủ")

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
			<div class="col-lg-8">
				<div class="news-list">
					<div class="row">
						@foreach($news as $value)
						<div class="news-list-block">
							<div class="col-4">
							<a href="{{ route('home.show',$value->id) }}"><img class="news-img" src="storage/{{ $value->image   }}" width="100%" height="200px"></a>
							</div>
							<div class="col-8 news-text">
								<h4 class="news-list-title"><a href="{{ route('home.show',$value->id) }}">{{ $value->title }}</a></h4>
								<i class="far fa-calendar-alt"></i>
								<span>{{ date_format($value->created_at,'d/m/Y') }}</span>
								<p>{!! $value->content !!}</p>
							</div>
						</div>
						<hr style="width: 100%;background-color: #ccc">
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="news-transfer-list">
					<div class="news-transfer-title">
						<i class="fas fa-caret-right"></i>
						<h4 class="news-transfer-text">TIN TỨC HOT</h4>
					</div>
					<hr style="width: 100%;height: 1px;background-color: #18998e;margin-top: 0">


					@foreach ($events as $item)
					<div class="news-transfer">
						<div class="news-transfer-block">
							<a href=""><img src="storage/{{ $item->image }}" alt="" width="90" height="90"></a>
						<p><a href="">{{ $item->title }}</a></p>
						</div>
					</div>
					@endforeach

				</div>
				<div class="news-transfer-list">
					<div class="news-transfer-title">
						<i class="fas fa-caret-right"></i>
						<h4 class="news-transfer-text">SỰ KIỆN HOT</h4>
					</div>
					<hr style="width: 100%;height: 1px;background-color: #18998e;margin-top: 0">

					@foreach ($events as $item)
					<div class="news-transfer">
						<div class="news-transfer-block">
							<a href=""><img src="storage/{{ $item->image }}" alt="" width="90" height="90"></a>
						<p><a href="">{{ $item->title }}</a></p>
						</div>
					</div>
					@endforeach
			
				</div>
			</div>
			<!---- end lien quan -->
		</div>
		
		<!-- Page -->
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
				{{ $news->links() }}
			</ul>
		</nav>

	</div>
</div>
@endsection

