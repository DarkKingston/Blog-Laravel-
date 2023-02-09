<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use function dd;

class ShowController extends Controller
{
    public function __invoke(Category $category): string
    {
        return view('admin.category.show', compact('category'));
    }
}
