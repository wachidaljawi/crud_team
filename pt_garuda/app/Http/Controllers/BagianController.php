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
        bagian::create($validatedData);
        $request->session()->flash('pesan', "Data {$validatedData['bagian']} berhasil disimpan");
        return redirect('/bagian');
    }

    public function show(bagian $bagian)
    {
        return view('pages.bagian.detail-bagian', ['bagian' => $bagian]);
    }

    public function edit($id)
    {
        $bagian = bagian::find($id);
        return view('pages.bagian.edit-bagian', ['bagian' => $bagian]);
    }

    public function update($bagian, Request $request)
    {
        $validatedData = $request->validate([
            'bagian' => 'required',
        ]);
        $bagian = bagian::find($bagian);
        $bagian->bagian = $request->bagian;
        $bagian->save();
        $request->session()->flash('pesan', "Data {$validatedData['bagian']} berhasil diupdate");
        // $request->session()->flash('pesan', 'Data {$validatedData["no_invoice"]} berhasil disimpan');
        return redirect('/bagian');
    }

    public function destroy($bagian, Request $request)
    {

        $bagian = bagian::find($bagian)->delete();
        $request->session()->flash('pesan', "Data berhasil dihapus");
        return redirect('/bagian');
    }

}
