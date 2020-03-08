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
class UserCommentController extends Controller
{

    // user comment
    public function store(CommentRequest $request)
    {
        $data = Arr::except($request, ['_token'])->toarray();
        Comment::create($data);
        return redirect()->back();
    }


}
