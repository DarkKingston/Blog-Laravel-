<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use function dd;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request): string
    {
        $data = $request-> validated();
        Category::firstOrCreate($data);
        return redirect()->route('admin.category.index');
    }
}
