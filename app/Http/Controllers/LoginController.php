<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;

class LoginController extends Controller
{
    //
    public function index()
    {
        if (!Session::get('login')) {
            return redirect('login');
        } else {
            return view('dashboard.index');
        }
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = User::where('email', $email)->first();
        if ($data) { //apakah email tersebut ada atau tidak
            if (Hash::check($password, $data->password)) {
                Session::put('name', $data->name);
                Session::put('email', $data->email);
                Session::put('level', $data->level);
                Session::put('login', TRUE);
                return redirect('dashboard');
            } else {
                return redirect('login')->with('alert', 'Password atau Email, Salah !');
            }
        } else {
            return redirect('login')->with('alert', 'Password atau Email, Salah!');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('login')->with('logout', 'Kamu sudah logout');
    }

    public function register(Request $request)
    {
        if (Session::get('level') == 'admin') {
            return view('auth.register');
        } else {
            return redirect('dashboard')->with('alert', 'Silahkan Hubungi Admin untuk menambahkan user baru');
        }
    }

    public function registerPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'telepon' => 'required|numeric',
            'level' => 'required',
            'password-confirm' => 'required|same:password',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ]);
        return redirect('login')->with('alert-success', 'Kamu berhasil Register');
    }
}
