<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\CartItems;
use App\Models\Backend\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Products::findOrFail($request->product_id);
        $price = $product->price;

        $cartItem = CartItems::where('product_id', $product->id)
            ->when(Auth::check(), function ($query) {
                return $query->where('user_id', Auth::id());
            }, function ($query) {
                return $query->where('session_id', Session::getId());
            })
            ->first();

        if ($cartItem) {
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            CartItems::create([
                'user_id' => Auth::id(),
                'session_id' => !Auth::check() ? Session::getId() : null,
                'product_id' => $product->id,
                'quantity' => $request->quantity,
                'price' => $price,
            ]);
        }
        
        $cartCount = CartItems::when(Auth::check(), function ($query) {
            return $query->where('user_id', Auth::id());
        }, function ($query) {
            return $query->where('session_id', Session::getId());
        })
        ->sum('quantity');

        return response()->json(['message' => 'Product added to cart successfully!', 'cartCount' => $cartCount]);
    }

    public function index()
    {
        $cartItems = CartItems::with('product')
            ->when(Auth::check(), function ($query) {
                return $query->where('user_id', Auth::id());
            }, function ($query) {
                return $query->where('session_id', Session::getId());
            })
            ->get();

        return view('frontend.pages.cart.index', compact('cartItems'));
    }

    public function count()
    {
        $cartCount = CartItems::when(Auth::check(), function ($query) {
                return $query->where('user_id', Auth::id());
            }, function ($query) {
                return $query->where('session_id', Session::getId());
            })
            ->sum('quantity');

        return response()->json(['count' => $cartCount]);
    }
}
