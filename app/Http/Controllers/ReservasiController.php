<?php

namespace App\Http\Controllers;

use App\Models\reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtreservasi = reservasi::paginate(5);
        return view('Reservasi.data-reservasi', compact('dtreservasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Reservasi.create-reservasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        reservasi::create([
            'id_reservasi' => $request->id_reservasi,
            'nama_reservasi' => $request->nama_reservasi,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
        ]);

        return redirect('data-reservasi')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = reservasi::findorfail($id);
        return view('Reservasi.edit-reservasi', compact('res'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $res = reservasi::findorfail($id);
        $res->update($request->all());
        return redirect('data-reservasi')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = reservasi::findorfail($id);
        $res->delete();
        return back()->with('success', 'Data Berhasil Terhapus!');
    }
}
