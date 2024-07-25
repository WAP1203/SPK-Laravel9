<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class alternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'dataalternatif',
            [
                'users' => alternatif::all(),
                'title' => 'Data Alternatif'
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
        return view(
            'addalternatif',
            ['title' => 'Tambah Data Alternatif']
        );
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
        $kode_alternatif = $request->input('kode_alternatif');
        $kriteria_1 = $request->input('kriteria_1');
        $kriteria_2 = $request->input('kriteria_2');
        $kriteria_3 = $request->input('kriteria_3');
        $kriteria_4 = $request->input('kriteria_4');
        $kriteria_5 = $request->input('kriteria_5');

        $alternatif = new alternatif();
        $alternatif->kode_alternatif = $kode_alternatif;
        $alternatif->kriteria_1 = $kriteria_1;
        $alternatif->kriteria_2 = $kriteria_2; // Don't forget to encryp!s
        $alternatif->kriteria_3 = $kriteria_3;
        $alternatif->kriteria_4 = $kriteria_4;
        $alternatif->kriteria_5 = $kriteria_5;

        $alternatif->save();

        return redirect()->to('/alternatif');
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
        $alternatif = alternatif::count();
        return view('main', compact('alternatif'));
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
        $alternatif = alternatif::where('id', $id)->first();
        return view('editalternatif', [
            'alternatif' => $alternatif,
            'title' => 'Edit Data Alternatif'
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
        $kode_alternatif = $request->input('kode_alternatif');
        $kriteria_1 = $request->input('kriteria_1');
        $kriteria_2 = $request->input('kriteria_2');
        $kriteria_3 = $request->input('kriteria_3');
        $kriteria_4 = $request->input('kriteria_4');
        $kriteria_5 = $request->input('kriteria_5');

        $alternatif = alternatif::where('id', $id)->first();
        $alternatif->kode_alternatif = $kode_alternatif;
        $alternatif->kode_alternatif = $kriteria_1;
        $alternatif->kriteria_2 = $kriteria_2;
        $alternatif->kriteria_3 = $kriteria_3;
        $alternatif->kriteria_4 = $kriteria_4;
        $alternatif->kriteria_5 = $kriteria_5;

        $alternatif->save();

        return redirect()->to('/alternatif');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $alternatif = alternatif::where('id', $id)->first();
        $alternatif->delete();
        return redirect()->back();
        //
    }
}