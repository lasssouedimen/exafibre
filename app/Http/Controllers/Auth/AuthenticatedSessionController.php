<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Str;
use App\Models\User; 
use Illuminate\Support\Facades\Redirect;

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
        $content = $request->getContent();
        $email = Str::between($content, "email=", "&");
        $email = urldecode($email);

        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->route('login')->withErrors(['email' => 'Email not found.']);
        }

        if ($user->role == 0) {
            $request->authenticate();
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        if ($user->role == 1) {
            if ($user->archv == 0) {
                $request->authenticate();
                $request->session()->regenerate();
                return redirect()->route('dashboardchef');
            } elseif ($user->archv == 1) {
                return redirect()->route('login')->with('error', 'Désolé, vous êtes bloqué.');
            }
        }

        return redirect()->route('login')->with('error', 'Unauthorized access.');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
