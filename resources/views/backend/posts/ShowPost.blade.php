@extends('backend.masster.layout')
@section('title',"Show_Post")

@section('content')
<div class="app-title">

</div>
<div class="row">
  <div class="col-md-12">
	<div class="tile">
	  <section class="invoice">
		<div class="row mb-4">
		  <div class="col-6">
			<h4 class="page-header">Chi Tiết Bài Viết</h4>
		  </div>
		  <div class="col-6">
			<h5 class="text-right"></h5>
		  </div>
		</div>
		<div class="row">
		  <div class="col-12 table-responsive">

			<div style="margin-top: 20px;margin-left:-15px" class="row">
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
											<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
										@csrf
										<div class="form-group">
											<label>Danh Mục</label>
										<input type="text" name="title" class="form-control" value="{{ $post->ShowNameCategory['name'] }}" readonly>
										</div>
										<div class="form-group">
											<label>Người Đăng</label>
										<input type="text" name="title" class="form-control" value="{{ $post->ShowNameUser['name'] }}" readonly>
										</div>
											</div>
											<div class="form-group">
												<label>Tiêu đề</label>
											<input type="text" name="title" class="form-control"  value="{{ $post->title }}" readonly>
											</div>

											<div class="form-group">
												<label>Ảnh</label>
												<img src="storage/{{ $post->image }}" width="250px" height="200px">
											</div>
											
											<div class="form-group">
												<label>Nội dung</label>
												<textarea name="content" style="width: 100%;height: 100px;">{{ $post->content }}</textarea>
											</div>
											<div class="form-group">
												<label>Ngày Tạo</label>
											<input type="text" name="title" class="form-control" readonly value="{{ carbon\carbon::parse($post->created_at)->format('d-m-Y') }}">
											</div>
											<div class="form-group">
												<label>Ngày Cập Nhật</label>
											<input type="text" name="title" class="form-control" readonly value="{{ carbon\carbon::parse($post->updated_at)->format('d-m-Y') }}">
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
		</div>
@endsection