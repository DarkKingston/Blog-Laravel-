<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Post;

class ShowController extends BaseController
{
    public function __invoke(Post $post): string
    {
//        dd($post['category_id'])
        $categories = Category::all();
        return view('admin.post.show', compact('post', 'categories'));
    }
}
