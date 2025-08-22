<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class DhashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('backend.pages.dashboard', compact(
            'user'
        ));
    }


}
