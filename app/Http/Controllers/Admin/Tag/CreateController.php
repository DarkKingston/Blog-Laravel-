<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke(): string
    {
        return view('admin.tag.create');
    }
}
