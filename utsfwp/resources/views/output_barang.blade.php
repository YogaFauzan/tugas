<!-- resources/views/output_barang.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Barang</title>
</head>
<body>
    <h2>Detail Barang</h2>
    <p>Kode Barang: {{ $kode_barang }}</p>
    <p>Nama Barang: {{ $nama_barang }}</p>
    <p>Jenis Varian: {{ $jenis_varian }}</p>
    <p>Qty: {{ $qty }}</p>
    <p>Harga Jual: {{ $harga_jual }}</p>

    <h2>Hasil</h2>
    <p>Total Harga: {{ $total_harga }}</p>

    @if ($total_harga >= 500.000)
        <p>Potongan Harga: 50%</p>
        @php
            $diskon = 0.5;
        @endphp
    @elseif ($total_harga >= 200.000)
        <p>Potongan Harga: 20%</p>
        @php
            $diskon = 0.2;
        @endphp
    @elseif ($total_harga >= 100.000)
        <p>Potongan Harga: 10%</p>
        @php
            $diskon = 0.1;
        @endphp
    @else
        <p>Tidak Ada Potongan Harga</p>
        @php
            $diskon = 0;
        @endphp
    @endif

    @php
        $harga_setelah_diskon = $total_harga - ($total_harga * $diskon);
    @endphp

    <p>Harga yang Harus Dibayar: {{ $harga_setelah_diskon }}</p>
</body>
</html>
