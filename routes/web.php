<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Cookie;
use RealRashid\SweetAlert\Facades\Alert;
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
        Alert::toast('Login Success','success')->autoClose(2500);
        return redirect()->intended("/dashboard");
    }
    // dd(Auth::attempt($credentials), Auth::check());
    Alert::error("Login Gagal", "Pastikan Email dan Password Benar");
    return back();
});

Route::get('/logout', function (Request $request) {
        // auth()->user()->forceFill([
        //     "remember_token" => null,
        // ])->save();

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

Route::get('/metronic', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('1_dashboard');
});

Route::get('/sidasi-humas-kerjasama', function () {
    return view('sidasi_humas');
});

Route::get('/sidasi-investigasi', function () {
    return view('sidasi_investigasi');
});

Route::get('/sidasi-kepaniteraan', function () {
    return view('sidasi_kepaniteraan');
});

Route::get('/sidasi-layanan-umum', function () {
    return view('sidasi_layanan_umum');
});

Route::get('/sidasi-sdm', function () {
    return view('sidasi_sdm');
});

Route::get('/sidasi-tata-usaha', function () {
    return view('sidasi_tata_usaha');
});

Route::get('/sidasi-bagian-umum', function () {
    return view('sidasi_bag_umum');
});

Route::get('/sidasi-biro-hukum', function () {
    return view('sidasi_biro_hukum');
});

Route::get('/sidasi-unit-spi', function () {
    return view('sidasi_unit_spi');
});

Route::get('/setting', function () {
    $cookie = Cookie::get('color');
    $active = Cookie::get('active');
    $chartColor = Cookie::get('chart');
    // $chartColor = ["#017EB8", "#28B3AC", "#F7AD1A", "#9FE7F5", "#E86340", "#063F5C"];
    // dd($cookie, $active);
    return view('9_setting', compact(['cookie', 'active', 'chartColor']) );
});

Route::post('/setting/cookie', function (Request $request) {
    // $response = new Response('Cookie');
    // $response->withCookie(cookie('color', $request["aside-color"]);
     $cookie = cookie()->forever('color', $request["aside-color"]);
     $active = cookie()->forever('active', $request["active-color"]);
     $chartColor = cookie()->forever('chart', $request["chart-color"]);
    //  dd($request);
    //  dd($cookie, $active, $chartColor, $request->get('chart-color'));
    return redirect()->back()->withCookies([$cookie, $active, $chartColor]) ;
});

Route::resource('/account', UserController::class);

Route::post('/account/new',  [UserController::class, 'create']);

Route::post('/account/update',  [UserController::class, 'update']);

Route::delete('/account/delete/{id}',  [UserController::class, 'delete']);