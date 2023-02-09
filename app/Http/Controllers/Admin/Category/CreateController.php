<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use function dd;

class CreateController extends Controller
{
    public function __invoke(): string
    {
        return view('admin.category.create');
    }
}
