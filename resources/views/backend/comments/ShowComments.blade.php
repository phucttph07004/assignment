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
              <h4 class="page-header">Toàn Bộ Bình Luận Của Bài Viết</h4>
            </div>
            <div class="col-6">
              <h5 class="text-right"></h5>
            </div>
          </div>
          <div class="row">
            <div class="col-12 table-responsive">
             
          <h5>Tiêu Đề : {{ $post->title}}</h5>

          <table class="table" style="margin-top: 60px">
							<thead class="thead-light">
							  <tr>
								<th scope="col" colspan="5">Tổng ({{ count($comments) }} Bình luận)</th>
							  </tr>
							</thead>
							<tbody>
								@foreach ($comments as $item)
								<tr>
								<td>
									<p style="font-weight: 500"> Người Gửi : {{ $item->user_name['name']}}</p>

									<p style="font-weight: 500"> {{ Carbon\carbon::parse($item->updated_at)->format('d-m-Y') }}</p>
									
                  <p style="margin-top: 10px">
                    @if ($item->is_active == 1 )
                    {{ $item->content }}
                    @else
                    <span style="color: red">Nội Dung Không Phù Hợp</span>
                    @endif
                  </p>

                  <td ><a class="btn btn-info" href="{{ route('comments.edit',$item->id) }}">Sửa</a></td>
                  <td>
                  <a onclick="return xoa()"id="btn_delete_{{ $item->id }}"class="btn btn-danger">Xóa</a>
                          <form id="delete_form_{{ $item->id }}" action="{{ route('comments.destroy',$item->id) }}"
                            method="post"style="display: none;"
                            >
                            @method('DELETE')
                            @csrf
                          </form> 
                  </td>



								</td>
								  </tr>
								@endforeach
							</tbody>
						  </table>

            <form role="form" method="POST" action="{{ route('comments.store') }}" style="margin-top: 60px">
							@csrf
							<div class="form-group">
							  <label for="exampleFormControlTextarea1">Bình Luận</label>
								<br>
								{!! ShowErrors($errors,'content') !!}
							  <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3" placeholder="Nhập nội dung bình luận ..."></textarea>
              <input type="hidden" name="post_id" value="{{ $post->id }}">
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						  </form>












            </div>
          </div>
          
          <div style="margin: auto" class="row d-print-none mt-2">
                  <!-- Page -->
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
				{{ $comments->links() }}
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
