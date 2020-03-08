@extends('backend.masster.layout')
@section('title',"ShowCategories")
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
            <h3 class="tile-title">Chi Tiết Danh Mục</h3>
            @endif
                <div class="form-group">
                  <label class="control-label">Tên Danh Mục</label>
                <input class="form-control" name="name" type="text" value="{{ $category->name }}" readonly>
                </div>

                <div class="form-group">
                  <label class="control-label">Người Tạo</label>
                  <input class="form-control" name="name" type="text" value="{{ $category->ShowNameUser['name'] }}" readonly>
                </div>

                <div class="form-group">
                  <label class="control-label">Ngày Tạo</label>
                  <input class="form-control" name="name" type="text" value="{{ carbon\carbon::parse($category->created_at)->format('d-m-Y') }}" readonly>
                </div>

                <div class="form-group">
                  <label class="control-label">Ngày Update</label>
                  <input class="form-control" name="name" type="text" value="{{ carbon\carbon::parse($category->updated_at)->format('d-m-Y') }}" readonly>
                </div>
            </div>
          </div>
        </div>

        <div class="clearix"></div>
      </div>
    </main>

@endsection