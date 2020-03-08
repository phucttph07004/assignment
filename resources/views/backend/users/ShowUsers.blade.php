@extends('backend.masster.layout')
@section('title',"List_Users")

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
                    <th>Ngày Sinh</th>
                    <th>Ngày Tạo</th>
                    <th>Ngày cập nhật</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->phone }}</td>
                        <td>@if($users->is_active==0)<span style="color: red">Khóa</span>@else<span style="color: blue">Hoạt Động</span>@endif</td>
                        <td>@if($users->role==1) User @else Admin @endif</td>
                        <td>{{ Carbon\carbon::parse($users->date_of_birth)->format('d-m-Y') }}</td>
                        <td>{{ Carbon\carbon::parse($users->created_at)->format('d-m-Y') }}</td>
                        <td>{{ Carbon\carbon::parse($users->updated_at)->format('d-m-Y') }}</td>
                        {{-- <th>
                            <button
                            id="btn_delete_{{ $item->id }}"
                            class="btn btn-danger"
                          >
                            Xóa
                          </button>

                          <form
                            id="delete_form_{{ $item->id }}"
                            action="{{ route('admin.destroy', $item->id) }}"
                            method="DELETE"
                            style="display: none;"
                          >
                            @csrf
                          </form> 
                        </th>--}}
                        
                      </tr>
                </tbody>
              </table>
            </div>
          </div>
          
          <div style="margin: auto" class="row d-print-none mt-2">
          </div>
        </section>
      </div>
    </div>
  </div>
@endsection
@push('scripts')
<script>
  $("button[id^='btn_delete_']").click(function (event) {
    id = event.currentTarget.attributes.id.value.replace('btn_delete_', '');
    console.log('id', id);
    
    $("#delete_form_" + id).submit();
  });
</script>
@endpush