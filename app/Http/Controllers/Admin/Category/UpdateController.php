<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use function dd;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $category): string
    {
        $data = $request->validated();
        $category->update($data);
        return view('admin.category.show', compact('category'));
    }
}
