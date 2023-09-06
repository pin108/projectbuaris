<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesettingController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        return view('pages.profil.profile', compact('user'));
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('pages.profil.profileedit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        // Validate the form data
        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|unique:users,email,' . $id,
            'NIK' => 'nullable',
            'nomor_hp' => 'nullable',
            'alamat_rumah' => 'nullable|string',
            'jenis_pekerjaan' => 'nullable|string',
            'tempat_bekerja' => 'nullable|string',
            'fotodiri' => 'nullable|mimes:jpeg,png|max:5000', // Optional image upload, max 5MB
            'ktp' => 'nullable|mimes:jpeg,png|max:5000', // Optional PDF upload, max 5MB
            'password' => 'nullable|string'
            // Add more validation rules as needed
        ]);

        // Check if a new password is provided and update it
        $password = null; // Set to null initially
        if ($request->filled('password')) {
            $password = bcrypt($request->input('password'));
        }

        // Update user data
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'NIK' => $request->input('NIK'),
            'nomor_hp' => $request->input('nomor_hp'),
            'alamat_rumah' => $request->input('alamat_rumah'),
            'jenis_pekerjaan' => $request->input('jenis_pekerjaan'),
            'tempat_bekerja' => $request->input('tempat_bekerja'),
        ];

        // Check if optional fields are provided and update accordingly
        if ($request->hasFile('fotodiri')) {
            $fotoDiri = $request->file('fotodiri')->store('public/fotodiri');
            $data['fotodiri'] = str_replace('public/', '', $fotoDiri);
        }

        if ($request->hasFile('ktp')) {
            $ktp = $request->file('ktp')->store('public/ktp');
            $data['ktp'] = str_replace('public/', '', $ktp);
        }

        // Update the password only if provided
        if ($password !== null) {
            $data['password'] = $password;
        }

        // Find the user by ID and update the data
        $updateUser = User::findOrFail($id);
        $updateUser->update($data);

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }
}
