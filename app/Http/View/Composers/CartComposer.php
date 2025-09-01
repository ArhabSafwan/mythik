<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Backend\CartItems;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartComposer
{
    public function compose(View $view)
    {
        $cartCount = CartItems::when(Auth::check(), function ($query) {
                return $query->where('user_id', Auth::id());
            }, function ($query) {
                return $query->where('session_id', Session::getId());
            })
            ->sum('quantity');

        $view->with('cartCount', $cartCount);
    }
}
