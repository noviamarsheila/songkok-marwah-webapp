<?php

namespace App\Http\Controllers;

use App\Models\AboutCompany;
use App\Models\Faq;
use App\Models\Layanan;
use App\Models\PilihKami;
use App\Models\Product;
use App\Models\Sosmed;
use App\Models\Team;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function home()
    {
        return view('profile.home', [
            'teams' => Team::all(),
            'sosmeds' => Sosmed::all(),
            'profile' => AboutCompany::first()
        ]);
    }

    public function about()
    {
        return view('profile.about', [
            'teams' => Team::all(),
            'sosmeds' => Sosmed::all(),
            'visi' => VisiMisi::where('tipe', 'visi')->get(),
            'misi' => VisiMisi::where('tipe', 'misi')->get(),
            'pilihkami' => PilihKami::all(),
            'profile' => AboutCompany::first()

        ]);
    }

    public function service()
    {
        $services = Layanan::take(6)->get();

        return view('profile.services', [
            'teams' => Team::all(),
            'sosmeds' => Sosmed::all(),
            'layanan' => $services,
            'products' => Product::all(),
            'profile' => AboutCompany::first()

        ]);
    }

    public function faq()
    {
        return view('profile.faq', [
            'teams' => Team::all(),
            'sosmeds' => Sosmed::all(),
            'faqs' => Faq::all(),
            'profile' => AboutCompany::first()

        ]);
    }

    public function contact()
    {
        return view('profile.contact', [
            'teams' => Team::all(),
            'sosmeds' => Sosmed::all(),
            'profilecompany' => AboutCompany::first(),
            'profile' => AboutCompany::first()

        ]);
    }
}
