<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        // TODO: Implement __invoke() method.
        return view('user.edit', compact('user'));
    }
}
