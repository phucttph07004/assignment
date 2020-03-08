@extends('backend.masster.layout')
@section('title',"Show_Edit_Users")

@section('content')
      <div class="app-title">
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            @if(session('thongbao'))
          <h3 style="color: blue" class="tile-title">{{ session('thongbao') }}</h3>
            @else
            <h3 class="tile-title">Sửa Người Dùng</h3>
            @endif
            <div class="tile-body">
            <form action="{{ route('admin.update',$user->id) }}" method="post">
                @method('put')
                  @csrf
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <br>
                  {!! ShowErrors($errors,"name") !!}
                <input class="form-control" name="name" type="text" value="{{$user->name}}">
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <br>
                  {!! ShowErrors($errors,"email") !!}
                  <input class="form-control" name="email" type="email" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label class="control-label">Phone</label>
                    <br>
                  {!! ShowErrors($errors,"phone") !!}
                    <input class="form-control" name="phone" type="number" value="{{$user->phone}}">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Date_of_birth</label>
                    <br>
                  {!! ShowErrors($errors,"date_of_birth") !!}
                    <input class="form-control" name="date_of_birth" type="date" value="{{$user->date_of_birth}}">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Password</label>
                    <br>
                  {!! ShowErrors($errors,"password") !!}
                    <input class="form-control" name="password" type="password" value="{{$user->password}}">
                  </div>
                <div class="form-group">
                    <label class="control-label">Chức Vụ</label>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" value="2" type="radio" name="role" @if($user->role == 2) checked @endif >Admin
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" value="1"  type="radio" name="role" @if($user->role == 1) checked @endif >User
                      </label>
                    </div>
                  </div>
                <div class="form-group">
                  <label class="control-label">Trạng Thái</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" value="1"  type="radio" name="is_active" @if($user->is_active == 1) checked @endif >Hoạt Động
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" value="0" type="radio" name="is_active" @if($user->is_active == 0) checked @endif >Khóa
                    </label>
                  </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Lưu</button>
                  </div>
              </form>
            </div>
          </div>
        </div>

        <div class="clearix"></div>
      </div>
    </main>

@endsection