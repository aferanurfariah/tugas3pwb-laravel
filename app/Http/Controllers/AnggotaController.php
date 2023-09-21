<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = DB::table('anggotas')->get();
        return view('anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'kode' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'jurusan' => 'required',
            'tlp' => 'required',
            'alamat' => 'required',
        ]);

        $query = DB::table('anggotas')->insert([
            'id' => $request['id'],
            'kode_anggota' => $request['kode'],
            'nama_anggota' => $request['nama'],
            'jk_anggota' => $request['jk'],
            'jurusan_anggota' => $request['jurusan'],
            'no_telp_anggota' => $request['tlp'],
            'alamat_anggota' => $request['alamat'],
        ]);

        return redirect('/anggota');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $anggota = DB::table('anggotas')->where('id',$id)->get();
        return view('anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $anggota = DB::table('anggotas')->where('id',$id)->get();
        return view('anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'kode_anggota' => 'required',
            'nama_anggota' => 'required',
            'jk_anggota' => 'required',
            'jurusan_anggota' => 'required',
            'no_telp_anggota' => 'required',
            'alamat_anggota' => 'required',

        ]);

        $query = DB::table('anggotas')->where('id', $id)->update([
            'kode_anggota' => $request['kode_anggota'],
            'nama_anggota' => $request['nama_anggota'],
            'jk_anggota' => $request['jk_anggota'],
            'jurusan_anggota' => $request['jurusan_anggota'],
            'no_telp_anggota' => $request['no_telp_anggota'],
            'alamat_anggota' => $request['alamat_anggota'],
        ]);

        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = DB::table('anggotas')->where('id', $id)->delete();
        return redirect('anggota');

    }
}
