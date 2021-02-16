<?php

namespace App\Http\Controllers;

use App\Models\ProgramKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ProgramKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = ProgramKerja::all();
        return view('program_kerja', ['programs' => $programs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('program_kerja_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ProgramKerja::create($request->all());
        return redirect(route('program-kerja.index'))->with('success', 'Berhasil menambah program kerja');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $program = ProgramKerja::find($id);
        return view('program_kerja_konfirmasi', ['program' => $program]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = ProgramKerja::find($id);
        return view('program_kerja_edit', ['program' => $program]);
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
        ProgramKerja::find($id)->update($request->all());
        return redirect(route('program-kerja.index'))->with('success', 'Berhasil memperbarui program kerja');
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
        return redirect(route('program-kerja.index'))->with('success', 'Berhasil menghapus program kerja');
    }

    public function confirm(Request $request)
    {
        $input = $request->input();
        ProgramKerja::find($input['program-kerja'])->update([
            'hasil' => $input['hasil'],
            'keterangan' => $input['keterangan'],
            'status' => true,
            'waktu_selesai' => Carbon::now()->format('Y-m-d'),
        ]);
        return redirect(route('program-kerja.index'))->with('success', 'Berhasil memperbarui status program kerja');
    }

    public function detail($id)
    {
        $program = ProgramKerja::find($id);
        return view('program_kerja_detail', ['program' => $program]);
    }
}
