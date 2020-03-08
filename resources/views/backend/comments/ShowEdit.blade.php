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
              <h4 class="page-header">Chỉnh Sửa Bình Luận Của Bài Viết</h4>
            </div>
            <div class="col-6">
              <h5 class="text-right"></h5>
            </div>
          </div>
          <div class="row">
            <div class="col-12 table-responsive">
             
              @if (session('thongbao'))
            <h4 style="color: blue">{{ session('thongbao') }}</h4>
              @endif
          <table class="table" style="margin-top: 60px">
							<thead class="thead-light">
							</thead>
							<tbody>
								<tr>
								<td>
									<p style="font-weight: 500"> Người Gửi : {{ $comment->user_name['name']}}</p>

                  <p style="font-weight: 500"> {{ Carbon\carbon::parse($comment->updated_at)->format('d-m-Y') }}</p>
                <form action="{{ route('comments.update',$comment->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <p style="margin-top: 10px">Nội Dung:<br>
                    {!! ShowErrors($errors,'content') !!}
                    <textarea name="content" cols="138" rows="10">{{ $comment->content }}</textarea>
                  </p>
                  <div class="form-group">
                    <label class="control-label">Trạng Thái</label>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" value="1" type="radio" name="is_active" @if($comment->is_active == 1) checked @endif >Phù Hợp
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" value="0"  type="radio" name="is_active" @if($comment->is_active == 0) checked @endif >Không Phù Hợp
                      </label>
                    </div>
                  </div>
                  <button class="btn btn-primary" >Lưu</button>
                </form>
								</td>
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
