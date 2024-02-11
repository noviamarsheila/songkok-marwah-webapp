<?php

namespace App\Http\Controllers;

use App\Models\PilihKami;
use Illuminate\Http\Request;

class PilihKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pilihkami.index', [
            'menu' => PilihKami::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pilihkami.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'deskripsi' => 'required'
        ]);

        PilihKami::create($validatedData);

        return redirect('/dashboard/mengapa-pilih-kami')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PilihKami  $pilihKami
     * @return \Illuminate\Http\Response
     */
    public function show(PilihKami $pilihKami)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PilihKami  $pilihKami
     * @return \Illuminate\Http\Response
     */
    public function edit(PilihKami $pilihKami)
    {
        return view('dashboard.pilihkami.edit', [
            'menu' => $pilihKami
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PilihKami  $pilihKami
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PilihKami $pilihKami)
    {
        $validatedData = $request->validate([
            'deskripsi' => 'required'
        ]);

        $pilihKami->update($validatedData);

        return redirect('/dashboard/mengapa-pilih-kami')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PilihKami  $pilihKami
     * @return \Illuminate\Http\Response
     */
    public function destroy(PilihKami $pilihKami)
    {
        $pilihKami->delete();

        return redirect('/dashboard/mengapa-pilih-kami')->with('success', 'Data berhasil dihapus!');
    }
}
