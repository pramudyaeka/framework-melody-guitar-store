<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerAction(Request $request)
    {
        if ($request->password == $request->confirm_password) {
            $usernameExist = User::where('username', $request->username)->first();
            if ($usernameExist) {
                session()->flash('error', 'Username sudah digunakan!');
                return redirect('/register');
            }
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);
            session()->flash('success', 'Akun berhasil dibuat!');
            return redirect('/register');
        } else {
            session()->flash('error', 'Konfirmasi password anda salah!');
            return redirect('/register');
        }
    }
    public function loginAction(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        if (Auth::attempt($data)) {
            return redirect('users/admin/account');
        } else {
            session()->flash('error', 'Username atau Password anda salah!');
            return redirect('/login');
        }
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
