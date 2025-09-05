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
        $categories = Categories::get()->where('parent_id', null);
        $trendingProducts = Products::latest()->take(3)->get();
        $bestSellingProducts = Products::inRandomOrder()->take(3)->get();
        $fandomProducts = Products::inRandomOrder()->take(9)->get();

        return view('frontend.pages.mythik_home', compact('categories', 'trendingProducts', 'bestSellingProducts', 'fandomProducts'));
    }
    public function show(Request $request)
    {
        $slug = $request->query('slug');
        $product = Products::where('slug', $slug)->firstOrFail();
        return view('frontend.pages.product_details.show', compact('product'));
    }


}
