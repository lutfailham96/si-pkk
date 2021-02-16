<?php

namespace App\Http\Controllers;

use App\Models\KegiatanPelatihan;
use App\Models\ProgramKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class KegiatanPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = KegiatanPelatihan::all();
        return view('kegiatan_pelatihan', ['trainings' => $trainings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kegiatan_pelatihan_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KegiatanPelatihan::create($request->all());
        return redirect(route('kegiatan-pelatihan.index'))->with('success', 'Berhasil menambah kegiatan pelatihan');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $training = KegiatanPelatihan::find($id);
        return view('kegiatan_pelatihan_edit', ['training' => $training, 'waktu' => Carbon::parse($training->waktu)->format('Y-m-d\TH:i')]);
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
        KegiatanPelatihan::find($id)->update($request->all());
        return redirect(route('kegiatan-pelatihan.index'))->with('success', 'Berhasil memperbarui kegiatan pelatihan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = ProgramKerja::find($id);
        $program->delete();
        return redirect(route('kegiatan-pelatihan.index'))->with('success', 'Berhasil mengapus kegiatan pelatihan');
    }
}
