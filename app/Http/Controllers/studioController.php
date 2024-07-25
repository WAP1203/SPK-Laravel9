<?php

namespace App\Http\Controllers;

use App\Models\studio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class studioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datastudio', [
            'users' => studio::all(),
            'title' => 'Data Studio'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('addstudio', [
            'title' => 'Tambah Data Studio'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->input('nama');
        $lokasi = $request->input('lokasi');
        $kontak = $request->input('kontak');
        $peralatan = $request->input('peralatan');
        $biaya_tarif = $request->input('biaya_tarif');
        $rating = $request->input('rating');

        $studio = new studio;
        $studio->nama = $nama;
        $studio->lokasi = $lokasi;
        $studio->kontak = $kontak;
        $studio->peralatan = $peralatan;
        $studio->biaya_tarif = $biaya_tarif;
        $studio->rating = $rating;

        $studio->save();

        return redirect()->to('/studio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studio = studio::count();

        return view('main', compact('studio'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studio = studio::where('id', $id)->first();

        return view('editstudio', [
            'studio' => $studio,
            'title' => 'Edit Data Studio'
        ]);
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
        $nama = $request->input('nama');
        $lokasi = $request->input('lokasi');
        $kontak = $request->input('kontak');
        $peralatan = $request->input('peralatan');
        $biaya_tarif = $request->input('biaya_tarif');
        $rating = $request->input('rating');

        $studio = studio::where('id', $id)->first();
        $studio->nama = $nama;
        $studio->lokasi = $lokasi;
        $studio->kontak = $kontak;
        $studio->peralatan = $peralatan;
        $studio->biaya_tarif = $biaya_tarif;
        $studio->rating = $rating;

        $studio->save();

        return redirect()->to('/studio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $studio = studio::where('id', $id)->first();
        $studio->delete();
        return redirect()->back();
    }
}