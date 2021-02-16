<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $anggota = Auth::user();
        return view('profile', ['anggota' => $anggota]);
    }

    public function update(Request $request, $id)
    {
        User::find($id)->update($request->all());
        return redirect(route('profile.index'))->with('success', 'Berhasil memperbarui profile');
    }

    public function changePassword(Request $request)
    {
        User::find($request->user()->id)->update([
            'password' => Hash::make($request->input('password')),
        ]);
        return redirect(route('login'))->with('success', 'Berhasil memperbarui kata sandi, silahkan login ulang');
    }
}
