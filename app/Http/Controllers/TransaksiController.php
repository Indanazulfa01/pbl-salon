<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\customer;
use App\Models\service;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dttransaksi = transaksi::paginate(5);
        return view('Transaksi.data-transaksi', compact('dttransaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = customer::all();
        $service = service::all();
        return view('Transaksi.create-transaksi', compact('customer', 'service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        transaksi::create([
            'id_customer' => $request->id_customer,
            'id_service' => $request->id_service,
            'total' => $request->total,
        ]);

        return redirect('data-transaksi')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trs = transaksi::findorfail($id);
        $customer = customer::all();
        $service = service::all();
        return view('Transaksi.edit-transaksi', compact('trs', 'customer', 'service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $trs = transaksi::findOrFail($id);
        $trs->update($request->all());
        return redirect('data-transaksi')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksi $id)
    {
        $trs = transaksi::findorfail($id);
        $trs->delete();
        return back()->with('success', 'Data Berhasil Terhapus!');
    }
}
