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
class UserProfileController extends Controller
{

    // show hồ sơ cá nhân
    public function show(){
        $data['user']=User::find(Auth::user()->id);
        return view('frontend.user.Profile_User',$data);
    }

    // form sửa hồ sơ cá nhân
    public function edit(){
        $data['user']=User::find(Auth::user()->id);
        return view('frontend.user.Edit_Profile',$data);
    }

    // Lưu hồ sơ cá nhân vừa sửa
    public function update(UpdateProfileRequest $request){
        $user = User::find(Auth::user()->id);
        if($request->password == $user->password ){
            $data = Arr::except($request, ['_token','created_at','password'])->toarray();
        }else{
            $data = Arr::except($request, ['_token','created_at','updated_at'])->toarray();
            $data['password']=bcrypt($request->password);
        }
        $updated_at=Carbon::now()->toarray();
        $data['updated_at']=$updated_at['formatted'];
        $user->update($data);
        return redirect()->route('userprofile.show',Auth::user()->id)->with('thongbao','Đã Sửa Thành Công');
    }
    



}
