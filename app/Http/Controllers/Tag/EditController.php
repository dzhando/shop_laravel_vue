<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Tag $tag)
    {
        // TODO: Implement __invoke() method.
        return view('tag.edit', compact('tag'));
    }
}
