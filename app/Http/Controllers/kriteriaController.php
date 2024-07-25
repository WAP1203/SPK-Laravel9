<?php

namespace App\Http\Controllers;

use App\Models\kriteria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'datakriteria',
            [
                'users' => kriteria::all(),
                'title' => 'Data Kriteria'
            ]
        );
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('addkriteria', [
            'title' => 'Tambah Data Kriteria'
        ]);
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
        $kode_kriteria = $request->input('kode_kriteria');
        $nama_kriteria = $request->input('nama_kriteria');
        $bobot = $request->input('bobot');
        $jenis = $request->input('jenis');

        $kriteria = new kriteria;
        $kriteria->kode_kriteria = $kode_kriteria;
        $kriteria->nama_kriteria = $nama_kriteria;
        $kriteria->bobot = $bobot;
        $kriteria->jenis = $jenis;
        $kriteria->save();

        return redirect()->to('/kriteria');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kriteria = kriteria::count();
        return view('main', compact('kriteria'));
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
        $kriteria = kriteria::where('id', $id)->first();

        return view('editkriteria', [
            'kriteria' => $kriteria,
            'title' => 'Edit Data Kriteria'
        ]);
        //
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
        $kode_kriteria = $request->input('kode_kriteria');
        $nama_kriteria = $request->input('harga');
        $bobot = $request->input('Jarak');
        $jenis = $request->input('harga');

        $kriteria = kriteria::where('id', $id)->first();
        $kriteria->kode_kriteria = $kode_kriteria;
        $kriteria->nama_kriteria = $nama_kriteria;
        $kriteria->bobot = $bobot;
        $kriteria->jenis = $jenis;
        // $kriteria->k_mesin = $k_mesin;

        $kriteria->save();

        return redirect()->to('/kriteria');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kriteria = kriteria::where('id', $id)->first();
        $kriteria->delete();
        return redirect()->back();
        //
    }
}