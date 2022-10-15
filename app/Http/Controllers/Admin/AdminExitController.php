<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminExitController extends Controller
{
    public function exit(Request $request)
    {
        if ($request->session()->has('admin')) {
            $request->session()->forget('admin');
        }

        return view('user.welcome');
    }   
}
