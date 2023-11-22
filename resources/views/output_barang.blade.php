<!-- resources/views/output_barang.blade.php -->
@extends('utama')

@section('output_barang')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Output Barang</title>
        <style>
            table {
                width: 50%;
                border-collapse: inherit;
                margin-top: 20px;
            }

            table,
            th,
            td {
                border: 1px solid black;
            }

            th,
            td {
                padding: 10px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>

    <body>
        <h1>Toko Abadi Selalu</h1>
        <h2>Detail Barang</h2>
        <table>
            <tr>
                <th>Kode Barang</th>
                <td>{{ $kode_barang }}</td>
            </tr>
            <tr>
                <th>Nama Barang</th>
                <td>{{ $nama_barang }}</td>
            </tr>
            <tr>
                <th>Jenis Varian</th>
                <td>{{ $jenis_varian }}</td>
            </tr>
            <tr>
                <th>Qty</th>
                <td>{{ $qty }}</td>
            </tr>
            <tr>
                <th>Harga Jual</th>
                <td>{{ $harga_jual }}</td>
            </tr>
        </table>

        <h2>Hasil</h2>
        <table>
            <tr>
                <th>Total Harga</th>
                <td>{{ $total_harga }}</td>
            </tr>
            <tr>
                <th>Potongan Harga</th>
                <td>
                    @if ($diskon > 0)
                        {{ $diskon * 100 }}%
                    @else
                        Tidak Ada Potongan Harga
                    @endif
                </td>
            </tr>
            <tr>
                <th>Harga yang Harus Dibayar</th>
                <td>{{ $harga_setelah_diskon }}</td>
            </tr>
        </table>
    </body>

    </html>
@endsection
