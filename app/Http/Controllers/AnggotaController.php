<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggotas = User::all();
        return view('member', ['anggotas' => $anggotas]);
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
        $input = $request->all();
        $status = User::create([
            'username' => $input['username'],
            'password' => Hash::make($input['password']),
            'nama' => $input['nama'],
            'nik' => $input['nik'],
            'kota' => $input['kota'],
            'tanggal_lahir' => $input['tanggal_lahir'],
            'jenis_kelamin' => $input['jenis_kelamin'],
            'alamat' => $input['alamat'],
            'telp' => $input['telp'],
            'jabatan' => $input['jabatan'],
        ]);
        if ($status) {
            return redirect(route('anggota.index'))->with('success', 'Berhasil memperbarui anggota');
        } else {
            return redirect(route('anggota.index'))->with('error', 'Gagal menambah anggota baru');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function add()
    {
        return view('member_add');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = User::find($id);
        return view('member_edit', ['anggota' => $anggota]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        User::find($id)->update($request->all());
        return redirect(route('anggota.index'))->with('success', 'Berhasil memperbarui anggota');
    }

    public function reset(Request $request, $id)
    {
        $user = User::find($id);
        $user->update(['password' => Hash::make('password')]);
        return redirect(route('anggota.index'))->with('success', 'Berhasil mereset password '.$user->username);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = User::find($id);
        $anggota->delete();
        return redirect(route('anggota.index'))->with('success', 'Berhasil menghapus anggota');
    }
}
