<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke(): string
    {

        $data = [];
        $data['likedCount'] = auth()->user()->likedPosts->count();
        $data['commentsCount'] = auth()->user()->comments->count();
//        $data['commentsCount'] = User::comments()->count();

        return view('personal.main.index', compact('data'));
    }
}
