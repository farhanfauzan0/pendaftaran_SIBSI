<?php

namespace App\Http\Controllers;

use App\Models\DataPendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Indexcontroller extends Controller
{
    function index()
    {
        return view('front.index');
    }

    function login_index()
    {
        if (Auth::guard('client')->check()) {
            return redirect()->route('index');
        } else {
            return view('front.auth.login');
        }
    }

    function register_index()
    {
        return view('front.auth.register');
    }

    function index_admin()
    {
        return view('index.index');
    }

    function cetak($id)
    {
        $data = DataPendaftar::find($id);
        return view('front.bukti', ['data' => $data]);
    }

    function pendaftaran_index()
    {
        $cek = DataPendaftar::find(Auth::guard('client')->user()->id);
        if ($cek) {

            return view('front.daftar1', ['data' => $cek]);
        } else {

            return view('front.daftar');
        }
    }

    function pendaftaran_post(Request $request)
    {

        $kk = $request->file('kk');
        $ijazah = $request->file('ijazah');
        $nilai_rapot = $request->file('nilai_rapot');

        $kk_name = Str::random(10) . '.' . $kk->getClientOriginalExtension();
        $ijazah_name = Str::random(10) . '.' . $ijazah->getClientOriginalExtension();
        $nilai_rapot_name = Str::random(10) . '.' . $nilai_rapot->getClientOriginalExtension();
        $kk->move('uploads/' . Auth::guard('client')->user()->no_telp . '/', $kk_name);
        $ijazah->move('uploads/' . Auth::guard('client')->user()->no_telp . '/', $ijazah_name);
        $nilai_rapot->move('uploads/' . Auth::guard('client')->user()->no_telp . '/', $nilai_rapot_name);

        $data = new DataPendaftar();
        $data->id_client = Auth::guard('client')->user()->id;
        $data->nama = $request->nama;
        $data->tempat_lahir = $request->tmp_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->nama_ibu = $request->nama_ibu;
        $data->tempat_lahir_ibu = $request->tmp_lahir_ibu;
        $data->tgl_lahir_ibu = $request->tgl_lahir_ibu;
        $data->alamat_ibu = $request->alamat_ibu;
        $data->nama_ayah = $request->nama_ayah;
        $data->tempat_lahir_ayah = $request->tmp_lahir_ayah;
        $data->tgl_lahir_ayah = $request->tgl_lahir_ayah;
        $data->alamat_ayah = $request->alamat_ayah;
        $data->kk = $kk_name;
        $data->ijazah = $ijazah_name;
        $data->nilai_rapot_akhir = $nilai_rapot_name;
        $data->save();

        return back()->with('success', true);
    }

    function bukti()
    {
        return view('front.bukti');
    }
}
