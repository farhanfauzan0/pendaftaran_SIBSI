<?php

namespace App\Http\Controllers;

use App\Models\DataPendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DataPendaftar::select('*')->join('userclient', 'data_pendaftar.id_client', 'userclient.id')->get();
        return view('data.pendaftar', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DataPendaftar::find($id);
        return view('data.editp', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = DataPendaftar::find($id);
        $data->nama = $request->nama;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->nama_ibu = $request->nama_ibu;
        $data->tempat_lahir_ibu = $request->tempat_lahir_ibu;
        $data->tgl_lahir_ibu = $request->tgl_lahir_ibu;
        $data->alamat_ibu = $request->alamat_ibu;
        $data->nama_ayah = $request->nama_ayah;
        $data->tempat_lahir_ayah = $request->tempat_lahir_ayah;
        $data->tgl_lahir_ayah = $request->tgl_lahir_ayah;
        $data->alamat_ayah = $request->alamat_ayah;
        if (!empty($request->file('kk'))) {
            $kk = $request->file('kk');
            $kk_name = Str::random(10) . '.' . $kk->getClientOriginalExtension();
            $kk->move('uploads/' . Auth::guard('client')->user()->no_telp . '/', $kk_name);
            $data->kk = $kk_name;
        }

        if (!empty($request->file('ijazah'))) {
            $ijazah = $request->file('ijazah');
            $ijazah_name = Str::random(10) . '.' . $ijazah->getClientOriginalExtension();
            $ijazah->move('uploads/' . Auth::guard('client')->user()->no_telp . '/', $ijazah_name);
            $data->ijazah = $ijazah_name;
        }
        if (!empty($request->file('nilai_rapot'))) {
            $nilai_rapot = $request->file('nilai_rapot');
            $nilai_rapot_name = Str::random(10) . '.' . $nilai_rapot->getClientOriginalExtension();
            $nilai_rapot->move('uploads/' . Auth::guard('client')->user()->no_telp . '/', $nilai_rapot_name);
            $data->nilai_rapot_akhir = $nilai_rapot_name;
        }
        $data->update();
        return back()->with('success', 'Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = DataPendaftar::find($id);
        $book->delete();
        return response()->json(['alertdelete' => true]);
    }
}
