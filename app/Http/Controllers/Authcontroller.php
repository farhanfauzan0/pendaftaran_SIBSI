<?php

namespace App\Http\Controllers;

use App\Models\Userclient;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    public function index_login_admin()
    {
        if (Auth::guard('web')->check()) {
            return redirect()->route('index.admin');
        } else {

            return view('login.login');
        }
    }

    function login_web_post(Request $request)
    {
        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'mssg' => 'Masukan data dengan benar']);
        }

        $data = [
            'username'     => $request->username,
            'password'  => $request->password,
        ];

        Auth::guard('web')->attempt($data);

        // dd($a);

        if (Auth::guard('web')->check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('index.admin');
        } else { // false
            return redirect()->route('login.admin.index')->with('error', true);
        }
    }

    function post_register(Request $request)
    {
        // dd($request->all());
        $rules = [
            'no' => 'required|min:3|max:35',
            'password' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('register.index')->with(['status' => true, 'mssg' => 'Masukan data dengan benar', 'jdl' => 'Gagal!', 'icon' => 'error']);
        }

        $checke = Userclient::select('*')->whereno_telp($request->no)->first();
        if ($checke) {
            return redirect()->route('register.index')->with(['status' => true, 'mssg' => 'Registrasi gagal! Email telah digunakan', 'jdl' => 'Gagal!', 'icon' => 'error']);
        }

        // $user = new Userclient();
        $pass = Hash::make($request->password);
        $simpan = Userclient::insert([
            'no_telp' => $request->no,
            'password' => $pass
        ]);

        if ($simpan) {
            return redirect()->route('register.index')->with(['status' => true, 'mssg' => 'Registrasi berhasil!', 'jdl' => 'Berhasil!', 'icon' => 'success']);
        } else {
            return redirect()->route('register.index')->with(['status' => true, 'mssg' => 'Registrasi gagal!', 'jdl' => 'Gagal!', 'icon' => 'error']);
        }
    }

    function post_login(Request $request)
    {
        $rules = [
            'no' => 'required',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('login.index')->with(['status' => true, 'mssg' => 'Masukan data dengan benar']);
        }

        $data = [
            'no_telp'     => $request->no,
            'password'  => $request->password,
        ];

        Auth::guard('client')->attempt($data);

        // dd($a);

        if (Auth::guard('client')->check()) {
            return redirect()->route('index');
        } else {
            return redirect()->route('login.index')->with(['status' => true, 'mssg' => 'Masukan data dengan benar']);
        }
    }
}
