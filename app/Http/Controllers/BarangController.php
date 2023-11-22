<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function showForm()
    {
        return view('input_barang');
    }

    public function processForm(Request $request)
    {
        $kode_barang = $request->input('kode_barang');
        $nama_barang = $request->input('nama_barang');
        $jenis_varian = $request->input('jenis_varian');
        $qty = $request->input('qty');
        $harga_jual = $request->input('harga_jual');

        $total_harga = $qty * $harga_jual;

        $diskon = 0;
        if ($total_harga >= 500000) {
            $diskon = 0.5;
        } elseif ($total_harga >= 200000) {
            $diskon = 0.2;
        } elseif ($total_harga >= 100000) {
            $diskon = 0.1;
        }

        $harga_setelah_diskon = $total_harga - ($total_harga * $diskon);
        Barang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'jenis_varian' => $request->jenis_varian,
            'qty' => $request->qty,
            'harga_jual' => $request->harga_jual,
        ]);
        // Mengirimkan data ke view

        return view('output_barang',  compact('kode_barang', 'nama_barang', 'jenis_varian', 'qty', 'harga_jual', 'total_harga', 'diskon', 'harga_setelah_diskon'));
    }
}
