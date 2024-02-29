<?php

namespace App\Http\Controllers;

use App\Models\AboutCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class AboutCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.aboutcompany.index', [
            'profiles' => AboutCompany::all()
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function show(AboutCompany $aboutCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutCompany $aboutCompany)
    {
        return view('dashboard.aboutcompany.edit', [
            'profile' => $aboutCompany
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutCompany $aboutCompany)
    {

        $rules = [
            'name' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'alamat' => 'required|max:255',
            'workshop' => 'required|max:255',
            'no_hp' => 'required|max:14',
            'web' => 'required|max:255',
            'email' => 'required|max:255',
            'nama_brand' => 'required|max:255',
            'link_map' => 'required',
            'akta_pendiri' => 'nullable'
        ];

        if ($request->logo) {
            $rules['logo'] = 'image|file|max:2024';
        }

        $validatedData = $request->validate($rules);

        // jika image diperbarui
        if ($request->logo) {
            // hapus oldImage jika ada
            $filePath = public_path('/images/products/' . $aboutCompany->image);
            if (File::exists($filePath)) {
                // hapus file tsb
                File::delete($filePath);
            }
            // ubah nama gambar, menjadi slug + . + ekstensi: songkok-mewah.png
            $imageName = 'logo' . '.' . $request->logo->getClientOriginalExtension();
            // untuk menyimpan nama image kedatabase
            $validatedData['logo'] = $imageName;
            // move image ke folder 'public/images/product'
            $request->file('logo')->move(public_path('images/logo'), $imageName);
        }


        $aboutCompany->update($validatedData);

        return redirect('/dashboard/about-company')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutCompany $aboutCompany)
    {
        //
    }
}
