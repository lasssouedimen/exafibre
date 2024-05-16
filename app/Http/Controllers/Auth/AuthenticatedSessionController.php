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
        $user= User::where('email',$email)->first();
        //kenou admin
        if($user->role==0){
            $request->authenticate();
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);
        }
        //kenou chef d'equipe
        if($user->role==1 && $user->archv==0){
            $request->authenticate();
            $request->session()->regenerate();
            return redirect()->route('dashboardchef');
        }elseif($user->role==1 && $user->archv==1){
         
            return redirect(route('login'))-> with('Désolé, vous êtes bloqué.');
           
        }
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
