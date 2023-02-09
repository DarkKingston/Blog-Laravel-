<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use function dd;

class DeleteController extends Controller
{
    public function __invoke(Category $category): string
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
