<?php

namespace App\Http\Controllers;

use App\Models\AboutCompany;
use App\Http\Requests\StoreAboutCompanyRequest;
use App\Http\Requests\UpdateAboutCompanyRequest;

class AboutCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreAboutCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAboutCompanyRequest $request)
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAboutCompanyRequest  $request
     * @param  \App\Models\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAboutCompanyRequest $request, AboutCompany $aboutCompany)
    {
        //
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
