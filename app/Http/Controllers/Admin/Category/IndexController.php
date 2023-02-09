<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use function dd;

class IndexController extends Controller
{
    public function __invoke(): string
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }
}
