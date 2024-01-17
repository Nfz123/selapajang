<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    protected $redirectTo = '/login-admin-siode';

    public function __construct()
    {
        $this->redirectTo = redirect('login-admin-siode');
    }
    /**
     * Display login page.
     *
     * @return Renderable
     */
    public function show()
    {
        return view('auth.login');
    }

    /**
     * Handle account login request
     *
     * @param LoginRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials)):
            return redirect()
                ->to('login-admin-siode')
                ->with('error', 'username atau password yang anda masukan salah');
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);
        // Tambahkan logika berikut untuk menentukan destinasi setelah login
        // Tambahkan logika berikut untuk menentukan destinasi setelah login berdasarkan peran
        // if ($user->role === 'admin') {
        //     return redirect()
        //         ->to('admin-dashboard')
        //         ->with('success', 'Anda berhasil login!');
        // } else {
        //     return redirect()
        //         ->to('user-dashboard')
        //         ->with('success', 'Anda berhasil login!');
        // }
        return $this->authenticated($request, $user)->redirectTo = redirect('siode/dashboard')->with('success', 'Anda berhasil login !');
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }
}
