@extends('frontend.master.layout')
@section('title','user_add_posts')
@section('content')

<div class="plan">
	<div class="container">
		<h3 class="plan-text">
		</h3>
	</div>
</div>
<div class="project plan-project" style="background-color: #f7f7f7;margin-top: 0; padding-top: 50px;">
	<div class="container" style="background-color: #fff; padding: 15px;box-shadow: 0 0 10px rgba(0,0,0,0.1)">
		<div class="row">
			<div class="col-12 col-lg-8 plan-detail-text">
				<h4 style="text-shadow: 0px 0px 1px;
				">THÊM BÀI VIẾT MỚI</h4>
				<img style="padding: 50px;margin: auto" src="" width="500px">




				<div style="margin-top: -60px;margin-left:10px" class="row">
					<div class="col-xs-6 col-md-12 col-lg-12">
						<div class="panel panel-primary">
							<div class="panel-body">
								@if(session('thongbao'))
										<div class="alert bg-success" style="height: 40px" role="alert">
											<span class="glyphicon glyphicon-remove">{{ session('thongbao') }}</span>
										</div>
										@endif
								<div class="row" style="margin-bottom:40px">
									 
											<div class="col-md-11">
												<div class="form-group">
													<label>Danh mục</label><br>
													{!! ShowErrors($errors,'category_id') !!}
												<form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
											@csrf
													<select name="category_id" class="form-control">
														<option value=""></option>
														@foreach ($Categories as $item)
														<option value="{{ $item->id }}">{{ $item->name }}</option>
														@endforeach
													</select>
												</div>
												<div class="form-group">
													<label>Tiêu đề</label><br>
													{!! ShowErrors($errors,'title') !!}
												<input type="text" name="title" class="form-control" value="{{ old('title')}}">
												</div>

												<div class="form-group">
													<label>Ảnh</label><br>
													{!! ShowErrors($errors,'image') !!}
													<input class="form-control" name="image" type="file">
												</div>
												
												<div class="form-group">
													<label>Nội dung</label><br>
													{!! ShowErrors($errors,'content') !!}
													<textarea name="content" style="width: 100%;height: 100px;">{{ old('content')}}</textarea>
												</div>
												<div class="tile-footer">
													<button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm</button>
												</div>
											</div>
								</div>
								<div class="clearfix"></div>
								</form>
							</div>
						</div>
			
					</div>
				</div>






			</div>
			<div class="col-lg-4">
				<div class="news-transfer-list">
					<div class="news-transfer-title">
						<i class="fas fa-caret-right"></i>
						<h4 class="news-transfer-text">Tin liên quan</h4>
					</div>
					<hr style="width: 100%;height: 1px;background-color: #18998e;margin-top: 0">
					<div class="news-transfer">
						<div class="news-transfer-block">
							<a href=""><img src="http://hanoicenterkids.com/uploaded/_thumbs/Images/logo/LOGO.jpg.pagespeed.ce.y0Uyg8EJB3.jpg" alt="" width="90" height="90"></a>
							<p><a href="">DÃ NGOẠI THÁNG 7 – CHỦ ĐỀ MÔI TRƯỜNG SỐNG QUANH TA</a></p>
						</div>
					</div>
					<div class="news-transfer">
						<div class="news-transfer-block">
							<a href=""><img src="http://hanoicenterkids.com/uploaded/_thumbs/Images/logo/LOGO.jpg.pagespeed.ce.y0Uyg8EJB3.jpg" alt="" width="90" height="90"></a>
							<p><a href="">DÃ NGOẠI THÁNG 7 – CHỦ ĐỀ MÔI TRƯỜNG SỐNG QUANH TA</a></p>
						</div>
					</div>
					<div class="news-transfer">
						<div class="news-transfer-block">
							<a href=""><img src="http://hanoicenterkids.com/uploaded/_thumbs/Images/logo/LOGO.jpg.pagespeed.ce.y0Uyg8EJB3.jpg" alt="" width="90" height="90"></a>
							<p><a href="">DÃ NGOẠI THÁNG 7 – CHỦ ĐỀ MÔI TRƯỜNG SỐNG QUANH TA</a></p>
						</div>
					</div>
					<div class="news-transfer">
						<div class="news-transfer-block">
							<a href=""><img src="http://hanoicenterkids.com/uploaded/_thumbs/Images/logo/LOGO.jpg.pagespeed.ce.y0Uyg8EJB3.jpg" alt="" width="90" height="90"></a>
							<p><a href="">DÃ NGOẠI THÁNG 7 – CHỦ ĐỀ MÔI TRƯỜNG SỐNG QUANH TA</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>

















@endsection


