<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // if (!Auth::check() && $request->path() != 'login') {
        //     return redirect('/login');
        // }

        $user = Auth::user();
        // if ($user->userType == 'User') {
        //     return redirect('/login');
        // }
        // if ($request->path() == 'login') {
        //     return redirect('/');
        // }

        // return $this->checkForPermission($user, $request);
        return view('Home.index');
    }
}
