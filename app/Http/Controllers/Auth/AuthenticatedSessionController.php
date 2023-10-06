<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:web,store')->except('destroy');
    }
    /**
     * Display the login view.
     */
    public function create($guard): View
    {
        return view('auth.login',[
            'guard'=>$guard
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request ,$guard): RedirectResponse
    {
        $request->authenticate($guard);
        //عشان اخزن guard في السيرفس
        session()->put('guard',$guard);
        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request ,$guard): RedirectResponse
    {
        Auth::guard($guard)->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
