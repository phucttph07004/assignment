@extends('backend.masster.layout')
@section('title',"List_Users")
@section('active','app-menu__item active')

@section('content')
<div class="app-title">

  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <section class="invoice">
          <div class="row mb-4">
            <div class="col-6">
              <h4 class="page-header">Danh Sách Người Dùng</h4>
            </div>
            <div class="col-6">
              <h5 class="text-right"></h5>
            </div>
          </div>
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Số ĐT</th>
                    <th>Trạng Thái</th>
                    <th>Vai Trò</th>
                    <th></th>
                    <th></th>
                    <th><a href="{{ route('admin.create') }}" class="btn btn-success" >Thêm</a></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                    <tr>
                    <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>@if($item->is_active==0)<span style="color: red">Khóa</span>@else<span style="color: blue">Hoạt Động</span>@endif</td>
                        <td>@if($item->role==1) User @else Admin @endif</td>
                        <th><a href="{{ route('admin.show',$item->id) }}" class="btn btn-info" >Chi Tiết</a></th>
                        <th><a href="{{ route('admin.edit',$item->id) }}" class="btn btn-success" >Sửa</a></th>
                        <th>
                          <a onclick="return xoa()"id="btn_delete_{{ $item->id }}"class="btn btn-danger">Xóa</a>
                          <form id="delete_form_{{ $item->id }}" action="{{ route('admin.destroy',$item->id) }}"
                            method="post"style="display: none;"
                            >
                            @method('DELETE')
                            @csrf
                          </form> 
                        </th>

                        
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
          
          <div style="margin: auto" class="row d-print-none mt-2">
                  <!-- Page -->
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
				{{ $users->links() }}
			</ul>
		</nav>
          </div>
        </section>
      </div>
    </div>
  </div>
@endsection
@push('scripts')
<script>
  $("a[id^='btn_delete_']").click(function (event) {
    id = event.currentTarget.attributes.id.value.replace('btn_delete_', '');
    $("#delete_form_" + id).submit();
  });
</script>
@endpush

@push('scripts')
<script>
 function xoa () {
			return confirm('Bạn có muốn xóa không');
		}
</script>
@endpush

