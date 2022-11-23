<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;

use App\Http\Requests\Tag\StoreRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
       $date = $request->validated();
       Tag::firstOrCreate($date);

       return redirect()->route('tag.index');
    }
}
