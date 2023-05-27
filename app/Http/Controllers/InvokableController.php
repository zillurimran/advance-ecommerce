<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvokableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $pages)
    {
        if($pages == 'about'){
            return 'about is returned';
        }
        return view('pages.'. $pages);
    }

    public function write(){
        return 'write';
    }
}
