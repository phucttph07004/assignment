@extends('backend.masster.layout')
@section('title',"Add_Posts")

@section('content')
<div class="app-title">

</div>
<div class="row">
  <div class="col-md-12">
	<div class="tile">
	  <section class="invoice">
		<div class="row mb-4">
		  <div class="col-6">
			<h4 class="page-header">Thêm Bài Viết</h4>
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
												<label>Danh mục</label><br>
												{!! ShowErrors($errors,'category_id') !!}
											<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
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
		</div>
@endsection