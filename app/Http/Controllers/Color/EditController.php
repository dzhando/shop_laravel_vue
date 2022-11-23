<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;

use App\Models\Color;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Color $color)
    {
        // TODO: Implement __invoke() method.
        return view('color.edit', compact('color'));
    }
}
