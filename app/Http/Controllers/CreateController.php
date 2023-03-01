<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('create');
    }
}
