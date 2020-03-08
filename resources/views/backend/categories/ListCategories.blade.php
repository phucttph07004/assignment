@extends('backend.masster.layout')
@section('title',"ListCategories")

@section('content')
<div class="app-title">

  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <section class="invoice">
          <div class="row mb-4">
            <div class="col-6">
              <h4 class="page-header">Danh Sách Danh Mục</h4>
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
                    <th>Tên Danh Mục</th>
                    <th>Người Tạo</th>
                    <th>Ngày Tạo</th>
                    <th>Ngày cập Nhật</th>
                    <th></th>
                    <th></th>
                    <th><a href="{{ route('categories.create') }}" class="btn btn-success" >Thêm</a></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                    <tr>
                    <td>{{ $item->name }}</td>
                        <td>{{ $item->ShowNameUser['name'] }}</td>
                        <td>{{ Carbon\carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                        <td>{{ Carbon\carbon::parse($item->updated_at)->format('d-m-Y') }}</td>
                        <th><a href="{{ route('categories.show',$item->id) }}" class="btn btn-info" >Chi Tiết</a></th>
                        <th><a href="{{ route('categories.edit',$item->id) }}" class="btn btn-success" >Sửa</a></th>
                        <th>
                          <a onclick="return xoa()"id="btn_delete_{{ $item->id }}"class="btn btn-danger">Xóa</a>
                          <form id="delete_form_{{ $item->id }}" action="{{ route('categories.destroy',$item->id) }}"
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
				{{ $categories->links() }}
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

