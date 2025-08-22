<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\CustomeClasses\OwnClasses;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $user = Auth::user();
        if($user->status === 0){
            Auth::guard('web')->logout();
            OwnClasses::ActivityLoger('success','Login','user Login','You are blocked by the admin. Please contact support',$user->id);
            return redirect()->route('login')->with('error','You are blocked by the admin. Please contact support');
        }
        if($user->user_type === 1){
            Auth::guard('web')->logout();
            OwnClasses::ActivityLoger('success','Login','user Login','Frontend User Try to login',$user->id);
            return redirect()->route('login')->with('error','You are not authorized');
        }
        if (empty($user->role_id)) {
            Auth::guard('web')->logout();
            OwnClasses::ActivityLoger('success','Login','user Login','User doesn not have role',$user->id);
            return redirect()->route('login')->with('error', 'You are not authorized');
        }
        $request->session()->regenerate();
        OwnClasses::ActivityLoger('success','Login','user Login','User Login Successfully',Auth::user()->id);
        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
   public function destroy(Request $request): RedirectResponse
    {
        $userId = Auth::id(); // Store before logout

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Log activity after logout
        OwnClasses::ActivityLoger('success', 'Logout', 'user logout', 'User logged out successfully', $userId);

        return redirect('/');
    }

}
