<?php

namespace App\Http\Controllers;

use App\Office;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        // dd($user = Auth::user()->role);
        // return view('Home.index');
        if (!Auth::check() && $request->path() != 'login') {
            return redirect('/login');
        }

        if (!Auth::check() && $request->path() == 'login') {
            return view('Home.index');
        }
        // you are already logged in... so check for if you are an admin user..
        $user = Auth::user();
        return $this->checkForPermission($user, $request);
    }

    public function checkForPermission($user, $request)
    {
        $permission = json_decode($user->role->permission);
        
        $hasPermission = false;
        if (!$permission) {
            return view('Home.index');
        }
        
        foreach ($permission as $p) {
            if ($p->name == $request->path()) {
                if ($p->read) {
                    $hasPermission = true;
                }
            }
        }
        // dd($hasPermission);
        if ($hasPermission) {
            return view('Home.index');
        }

        return view('Home.index');
        return view('notfound');
    }
}
