@extends('backend.masster.layout')
@section('title',"Add_Users")

@section('content')
      <div class="app-title">
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            @if(session('thongbao'))
          <h3 style="color: blue" class="tile-title">{{ session('thongbao') }}</h3>
            @else
            <h3 class="tile-title">Thêm Người Dùng</h3>
            @endif
            <div class="tile-body">
            <form action="{{ route('admin.store')}}" method="POST">
                  @csrf
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <br>
                  {!! ShowErrors($errors,"name") !!}
                  <input class="form-control" name="name" type="text" placeholder="Enter full name">
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <br>
                  {!! ShowErrors($errors,"email") !!}
                  <input class="form-control" name="email" type="email" placeholder="Enter email address">
                </div>
                <div class="form-group">
                    <label class="control-label">Phone</label>
                    <br>
                  {!! ShowErrors($errors,"phone") !!}
                    <input class="form-control" name="phone" type="number" placeholder="Enter  phone">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Date_of_birth</label>
                    <br>
                  {!! ShowErrors($errors,"date_of_birth") !!}
                    <input class="form-control" name="date_of_birth" type="date" placeholder="Enter date_of_birth">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Password</label>
                    <br>
                  {!! ShowErrors($errors,"password") !!}
                    <input class="form-control" name="password" type="password" placeholder="Enter email address">
                  </div>
                <div class="form-group">
                    <label class="control-label">Chức Vụ</label>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" value="2" type="radio" name="role">Admin
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" value="1" checked type="radio" name="role">User
                      </label>
                    </div>
                  </div>
                <div class="form-group">
                  <label class="control-label">Trạng Thái</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" value="1" checked type="radio" name="is_active">Hoạt Động
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" value="0" type="radio" name="is_active">Khóa
                    </label>
                  </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm</button>
                  </div>
              </form>
            </div>
          </div>
        </div>

        <div class="clearix"></div>
      </div>
    </main>

@endsection