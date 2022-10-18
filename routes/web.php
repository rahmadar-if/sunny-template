<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('0_Welcome');
});

// begin :: Login

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ["required"],
        'password' => ["required"]
    ]);
    if (Auth::attempt($credentials)) {
        // dd($credentials);
        $request->session()->regenerate();
        return redirect()->intended("/dashboard");
    }
    // dd(Auth::attempt($credentials), Auth::check());
    // Alert::error("Login Gagal", "Pastikan Email dan Password Benar");
    return back();
});

Route::get('/logout', function (Request $request) {
        auth()->user()->forceFill([
            "remember_token" => null,
        ])->save();

        Auth::logout();

        Request()->session()->invalidate();

        Request()->session()->regenerateToken();


        if (str_contains($request->url(), "api")) {
            return response()->json([
                "status" => "success",
                "msg" => "Logged out",
            ]);
        }
        return redirect('/');
    });

// end :: Login

Route::get('/dashboard', function () {
    return view('1_dashboard');
});

Route::get('/account', function () {
    return view('2_account');
});
