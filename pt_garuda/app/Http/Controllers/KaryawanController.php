<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('pages.karyawan.tampil-karyawan', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.karyawan.form-karyawan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'nik' => 'required|size:10',
            'nama' => 'required',
            'alamat' => 'required',
            'no_HP' => 'required',
            'umur' => 'required'


        ]);

        Karyawan::create($request->all());
        return redirect('/karyawan')->with('status', 'Data Karyawan Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {

        return view('pages.karyawan.detail-karyawan', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        return view('pages.karyawan.edit-karyawan', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        Karyawan::where('id', $karyawan->id)
            ->update([

                'nik' => $request->nik,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'umur' => $request->umur,
                'no_HP' => $request->no_HP,
                'jenis_kelamin' => $request->jenis_kelamin

            ]);
        return redirect('/karyawan')->with('status', 'Data Karyawan Berhasil Di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        Karyawan::destroy($karyawan->id);
        return redirect('/karyawan')->with('status', 'Data Karyawan Berhasil Di Hapus');
    }
}
