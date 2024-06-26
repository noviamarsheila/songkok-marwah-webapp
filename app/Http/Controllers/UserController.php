<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        return view('dashboard.settings.setting', compact('user'));
    }

    public function changepw()
    {
        return view('dashboard.settings.ubahpw');
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users,username,' . $user->id,
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);

        User::where('id', $user->id)
            ->update($validatedData);

        return redirect('dashboard')->with('success', 'Profile updated successfully');
    }

    public function updatepw(Request $request)
    {

        // Validate the form data
        $validatedData = $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required|string|min:8',
            'password_baru_confirmation' => 'required|string|min:8',
        ]);

        // Get the current user
        $user = Auth::user();

        // Verify the current password
        if (!password_verify($request->password_lama, $user->password)) {
            return redirect()->back()->withErrors(['password_lama' => 'Password lama tidak sesuai']);
        }
        if ($validatedData['password_baru'] != $validatedData['password_baru_confirmation']) {
            return redirect()->back()->withErrors(['password_baru_confirmation' => 'Password harus sama dengan password baru']);
        }

        // Update the user's password
        $password_baru = bcrypt($validatedData['password_baru_confirmation']);


        User::where('id', $user->id)
            ->update([
                'password' => $password_baru
            ]);

        // Redirect back with success message
        return redirect('dashboard')->with('success', 'Password berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
