<?php

namespace App\Http\Controllers;

use App\Models\Sosmed;
use Illuminate\Http\Request;

class SosmedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.sosmed.index', [
            'sosmeds' => Sosmed::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sosmed.tambah');
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
            'nama' => 'required|max:255',
            'link' => 'required|max:255',
        ]);

        Sosmed::create($validatedData);

        return redirect('/dashboard/sosmed')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sosmed  $sosmed
     * @return \Illuminate\Http\Response
     */
    public function show(Sosmed $sosmed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sosmed  $sosmed
     * @return \Illuminate\Http\Response
     */
    public function edit(Sosmed $sosmed)
    {
        return view('dashboard.sosmed.edit', [
            'sosmed' => $sosmed
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sosmed  $sosmed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sosmed $sosmed)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'link' => 'required|max:255',
        ]);

        $sosmed->update($validatedData);

        return redirect('/dashboard/sosmed')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sosmed  $sosmed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sosmed $sosmed)
    {
        $sosmed->delete();

        return redirect('/dashboard/sosmed')->with('success', 'Data berhasil dihapus!');
    }
}
