<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Archive;
use App\Models\User;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function archiveShow(Archive $archive)
    {
        return view('user.archive-show')
            ->with(['archive' => $archive]);
    }
}
