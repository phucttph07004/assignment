@extends('frontend.master.layout')
@section('title','Hồ Sơ')
@section('content')
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-th-list"></i> Thông tin phụ huynh</h1>
		</div>

	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="tile">
				<div class="tile-body">
					<div class="col-md-10">
						<!-- general form elements -->
						<div style="margin-top: 100px;margin-left:100px" class="card card-primary">
							@if(session('thongbao'))
							<div style="background-color: blue;text-align: center;color: white;font-size: 18px;padding-top: 17px" class="card-header">
								<h3 class="card-title">Cập Nhật Thông Tin Thành Công</h3>
							  </div>
							@endif
						  <div class="card-header">
							<h3 class="card-title">Thông Tin Cá Nhân</h3>
						  </div>
						  <!-- /.card-header -->
						  <!-- form start -->
						<form method="GET" action="{{ route('userprofile.edit',Auth::user()->id) }}" role="form">
							  @csrf
							<div class="card-body">
							  <div class="form-group">
								<label for="exampleInputPassword1">Full Name</label>
							  <input type="text" class="form-control" value="{{ $user->name }}" id="exampleInputPassword1" readonly >
							  </div>
							  <div class="form-group">
								<label for="exampleInputPassword1"> Phone Number</label>
								<input type="number" value="{{ $user->phone }}" class="form-control" id="exampleInputPassword1" readonly >
							  </div>
							  <div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" value="{{ $user->email }}" class="form-control" id="exampleInputEmail1" readonly >
							  </div>
							  <div class="form-group">
								<label for="exampleInputEmail1">Password</label>
								<input type="password" value="{{ $user->password }}" class="form-control" id="exampleInputEmail1" readonly >
							  </div>
							  <div class="form-group">
								<label for="exampleInputEmail1">Date_of_birth</label>
								<input type="date" value="{{ $user->date_of_birth }}" class="form-control" id="exampleInputEmail1" readonly >
							  </div>
							  <div class="form-group">
								<label for="exampleInputEmail1">Created_at</label>
								<input type="text" value="{{ Carbon\carbon::parse($user->created_at)->format('d-m-Y') }}"  class="form-control"readonly id="exampleInputEmail1" >
							  </div>
							  <div class="form-group">
								<label for="exampleInputEmail1">Updated_at</label>
								<input type="text"  value="{{ Carbon\carbon::parse($user->updated_at)->format('d-m-Y') }}" class="form-control" readonly  id="exampleInputEmail1" >
							  </div>
							</div>
							<!-- /.card-body -->
			
							<div class="card-footer">
							  <button type="submit" class="btn btn-primary">Chỉnh Sửa</button>
							</div>
						  </form>
						</div>
						<!-- /.card -->	
					  </div>


				</div>
			</div>
		</div>
	</div>
</main>
<script>
	function confirmDelete(){
		let com = confirm('Bạn có muốn xóa không?');
		return com;
	}
</script>
@endsection

