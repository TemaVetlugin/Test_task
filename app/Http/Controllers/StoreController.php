<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Story;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
        $data=$request->validated();
        Story::firstOrCreate($data);
        return redirect('/');
    }
}
