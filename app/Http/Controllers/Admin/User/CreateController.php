<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke(User $user): string
    {
        $roles = User::getRoles();
        return view('admin.user.create', compact('user','roles'));
    }
}
