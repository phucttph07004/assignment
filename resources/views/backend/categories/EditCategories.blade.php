@extends('backend.masster.layout')
@section('title',"EditCategories")
@section('active','app-menu__item active')
@section('content')
      <div class="app-title">
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            @if(session('thongbao'))
          <h3 style="color: blue" class="tile-title">{{ session('thongbao') }}</h3>
            @else
            <h3 class="tile-title">Sửa Danh Mục</h3>
            @endif
            <div class="tile-body">
            <form action="{{ route('categories.update',$category->id)}}" method="POST">
              @method('put')
                  @csrf
                <div class="form-group">
                  <label class="control-label">Tên Danh Mục</label>
                  <br>
                  {!! ShowErrors($errors,"name") !!}
                <input class="form-control" name="name" type="text" value="{{ $category->name }}">
                </div>

                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Lưu Sửa</button>
                  </div>
              </form>
            </div>
          </div>
        </div>

        <div class="clearix"></div>
      </div>
    </main>

@endsection