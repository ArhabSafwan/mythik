<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Backend\Categories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categories::latest()->take(4)->get();
        return view('frontend.pages.mythik_home', compact('categories'));
    }
}