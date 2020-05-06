<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bagian;

class BagianController extends Controller
{
    public function index()
    {
        $bagian = bagian::all();
        return view('pages.bagian.tampil-bagian', ['bagian' => $bagian]);
    }

    public function create()
    {
        return view('pages.bagian.form-bagian');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'bagian' => 'required',
        ]);
        bagian::created($validatedData);
        Session::flash('success', 'Data berhasil ditambahkan');
        return redirect('/bagian');
    }

    public function show($id)
    {
        $bagian = bagian::find($id);
        return view('pages.bagian.detail-bagian', ['bagian' => $bagian]);
    }

    public function edit($id)
    {
        $bagian = bagian::find($id);
        return view('pages.bagian.edit-bagian', ['bagian' => $bagian]);
    }

    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'bagian' => 'required',
        ]);
        $bagian = bagian::find($id);
        $bagian->bagian = $request->bagian;
        $gudang->save();
        Session::flash('success', 'Data berhasil diupdate');
        // $request->session()->flash('pesan', 'Data {$validatedData["no_invoice"]} berhasil disimpan');
        return redirect('/bagian');
    }

    public function destroy($id)
    {
        $bagian = bagian::find($id)->delete();
        Session::flash('success', 'Data berhasil dihapus');
        return redirect('/bagian');
    }

}
