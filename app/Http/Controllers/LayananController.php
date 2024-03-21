<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.layanan.index', [
            'services' => Layanan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.layanan.tambah');
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
            'name' => 'required|max:255',
            'deskripsi' => 'required',
            'image' => 'image|file|max:2024'
        ]);

        if ($request->image) {
            // ubah nama gambar, menjadi slug + . + ekstensi: songkok-mewah.png
            $imageName = $validatedData['name'] . '.' .  $request->image->getClientOriginalExtension();
            // untuk menyimpan nama image kedatabase
            $validatedData['image'] = $imageName;
            // move image ke folder 'public/images/product'
            $request->image->move(public_path('images/layanan'), $imageName);
            // access di Front-End
            // {{ asset('images/products/' . $product->image) }}
            // atau src="/images/products/{{ $product->image }}"
        }

        Layanan::create($validatedData);
        return redirect('/dashboard/layanan-kami')->with('success', 'Layanan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        return view('dashboard.layanan.edit', [
            'layanan' => $layanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        $rules = [
            'name' => 'required|max:255',
            'deskripsi' => 'required'
        ];

        if ($request->image) {
            $rules['image'] = 'image|file|max:2024';
        }

        $validatedData = $request->validate($rules);

        // jika image diperbarui
        if ($request->image) {
            // hapus oldImage jika ada
            $filePath = public_path('/images/layanan/' . $layanan->image);
            if (File::exists($filePath)) {
                // hapus file tsb
                File::delete($filePath);
            }
            // ubah nama gambar, menjadi slug + . + ekstensi: songkok-mewah.png
            $imageName = $request->name . '.' . $request->image->getClientOriginalExtension();
            // untuk menyimpan nama image kedatabase
            $validatedData['image'] = $imageName;
            // move image ke folder 'public/images/product'
            $request->file('image')->move(public_path('images/layanan'), $imageName);
        }


        $layanan->update($validatedData);

        return redirect('/dashboard/layanan-kami')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        $filePath = public_path('/images/products/' . $layanan->image);
        if (File::exists($filePath)) {
            // hapus file tsb
            File::delete($filePath);
        }
        $layanan->delete();

        return redirect('/dashboard/layanan-kami')->with('success', 'Data berhasil dihapus!');
    }
}
