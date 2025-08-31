<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Models\Backend\Products;
use App\Models\Backend\Categories;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categories::latest()->take(4)->get();
        return view('frontend.pages.mythik_home', compact('categories'));
    }
    public function show(Request $request)
    {
        $slug = $request->query('slug');
        $product = Products::where('slug', $slug)->firstOrFail();
        return view('frontend.pages.product_details.show', compact('product'));
    }
}
