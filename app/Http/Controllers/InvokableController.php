<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvokableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return "i am invoke function";
    }
}
