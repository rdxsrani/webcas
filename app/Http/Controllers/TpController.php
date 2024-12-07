<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TP;

class TpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tp = TP::all();
        return view('view', compact('tp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form', [
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'tp'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tp = new TP;
        $tp->judul = $request->judul;
        $tp->subjudul = $request->subjudul;
        $tp->kategori = $request->kategori;
        $tp->tglpost = $request->tglpost;
        $tp->dltp = $request->dltp;
        $tp->desktp = $request->desktp;
        $tp->save();
        return redirect('/tp')->with('msg', 'TP berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tp = TP::find($id);
        return view('index', compact('tp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('form', [
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => route('tp.update', $id),
            'data' => TP::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tp = TP::find($id);
        if (!$tp){
            return redirect('/tp')->with('msg', 'Data tidak ditemukan');
        }
        $tp->judul = $request->judul;
        $tp->subjudul = $request->subjudul;
        $tp->kategori = $request->kategori;
        $tp->tglpost = $request->tglpost;
        $tp->dltp = $request->dltp;
        $tp->desktp = $request->desktp;
        $tp->save();
        return redirect('/tp')->with('msg', 'TP berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TP::destroy($id);
        return redirect('/tp')->with('msg', 'TP berhasil dihapus');
    }
}
