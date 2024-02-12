<?php

namespace App\Http\Controllers;

use App\Models\Sosmed;
use App\Models\Team;
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

        return view('profile.home', [
            'teams' => Team::all(),
            'sosmeds' => Sosmed::all()
        ]);
    }
}
