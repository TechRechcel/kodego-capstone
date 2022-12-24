<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

    public function getData(Request $request)
    {
        $data = $request->all();
        return view('index', compact('data'));
    }
}
