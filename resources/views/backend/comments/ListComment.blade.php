@extends('backend.masster.layout')
@section('title',"ListPosts")

@section('content')
<div class="app-title">

  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <section class="invoice">
          <div class="row mb-4">
            <div class="col-6">
              <h4 class="page-header">Danh Sách Bài Viết Có Bình Luận</h4>
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
                    <th>Hình Ảnh</th>
                    <th>Tiêu Đề</th>
                    <th>Danh Mục</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($posts as $key => $item )
                    <tr>
                    <td><img src="storage/{{ $item->image }}" width="70px" height="50px"></td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->ShowNameCategory['name'] }}</td>
                        <th><a href="{{ route('comments.show',$item->id) }}" class="btn btn-info" >Xem Toàn Bộ Comments</a></th>

                        
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
				{{ $posts->links() }}
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
