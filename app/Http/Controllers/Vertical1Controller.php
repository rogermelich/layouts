<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vertical1Controller extends Controller
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];
        return view('vertical1',$data);
    }

}
