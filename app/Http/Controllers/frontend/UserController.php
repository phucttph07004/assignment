<?php

namespace App\Http\Controllers\frontend;
use App\Models\{User,Comment,Post,Category};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\{CommentRequest,AddPostRequest,UpdateProfileRequest};
use Arr;
use Str;
use Auth;
use Carbon\Carbon;
// store
class UserController extends Controller
{

    // show all bài post của user
    public function index(){
       $data['posts']=Post::where('user_id',Auth::user()->id)->orderBy('id', 'desc')->paginate(5);
       return view('frontend.user.index',$data);
    }

    // xem chi tiết bài viết của mình
    public function show($post_id){
        $data['post']=Post::find($post_id);
        if($data['post']['user_id'] != Auth::User()->id){
        return redirect()->back();
        }else{
        $data['comments']=Comment::where('post_id', $post_id)->orderBy('id','desc')->get();
        return view('frontend.user.detail_post',$data);
        }
    }

    // tạo bài viết mới
    public function Create(){
        $data['Categories']=Category::all();
        return view('frontend.user.add_post',$data);
    }
    
    // lưu bài viết
    public function store(AddPostRequest $request){
        $data = Arr::except($request, ['_token'])->toarray();
        $data['user_id']=Auth::user()->id;
        //check ảnh
        if ($request->hasFile('image')) {
            $data['image']=$request->file('image')->store('images','public');
        }else{
            $data['image']='noImage.jpg';
        }
        Post::create($data);
        return redirect()->back()->with('thongbao','đã thêm thành công');
    }



}
