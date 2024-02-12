<?php

namespace App\Http\Controllers;

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
            'sosmeds' => Sosmed::all()
        ]);
    }

    public function about()
    {
        return view('profile.about', [
            'teams' => Team::all(),
            'sosmeds' => Sosmed::all(),
            'visi' => VisiMisi::where('tipe', 'visi')->get(),
            'misi' => VisiMisi::where('tipe', 'misi')->get(),
            'pilihkami' => PilihKami::all()
        ]);
    }

    public function service()
    {
        $services = Layanan::take(6)->get();
        $imageNames = ['creative-idea.png', 'online-solutions.png', 'data-icon.png', 'networking-solutions.png', 'payment-icon.png', 'after-sales.png'];

        $combinedData = [];
        foreach ($services as $key => $service) {
            $combinedData[] = [
                'service' => $service,
                'imageUrl' => asset('images/layanan/' . $imageNames[$key])
            ];
        }

        return view('profile.services', [
            'teams' => Team::all(),
            'sosmeds' => Sosmed::all(),
            'combinedData' => $combinedData,
            'products' => Product::all()
        ]);
    }
}
