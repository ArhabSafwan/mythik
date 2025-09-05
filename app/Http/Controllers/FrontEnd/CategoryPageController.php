<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Backend\Categories;
use Illuminate\Http\Request;

class CategoryPageController extends Controller
{
    /**
     * Display the specified category page.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        // Eager load the relationships for efficiency
        $category = Categories::where('slug', $slug)
            ->with([
                // Load children categories and their products
                'children' => function ($query) {
                    $query->with('products')->whereHas('products'); // Only get children that have products
                },
                // Load products directly associated with the parent category
                'products'
            ])
            ->firstOrFail();

        // Get products that belong directly to the parent category
        $parentProducts = $category->products;

        return view('frontend.pages.category_product_showcase.mythik_product_list', compact('category', 'parentProducts'));
    }
}
