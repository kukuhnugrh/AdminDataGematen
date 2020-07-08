<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Umat</title>
</head>
<body>
    <center>
        <h2>DATA UMAT LINGKUNGAN</h2>
        @if($dataLingkungan == "SEMUA LINGKUNGAN")
            <h3>SEMUA LINGKUNGAN</h3>
        @else
            @foreach( $dataLingkungan as $dl )
                <h3>{{ $dl->lingkungan_nama }}</h3>
            @endforeach
        @endif
        
        <h5>{{ date('Y-m-d H:i:s') }}</h5>
    </center>
    <br>
    <table class='table table-bordered' border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>Nomor KK</th>
                <th>Nama Umat</th>
                <th>Hubungan Keluarga</th>
                <th>Buku Baptis</th>
                <th>Agama</th>
                <th>Nomor Handphone</th>
                <th>Narasi</th>
                <th>Status Meninggal</th>
            </tr>
        </thead>
        <tbody id="daftarUmatWilayah">
            @foreach( $dataUmat as $du )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $du->umat_kk}}</td>
                    <td>{{ $du->umat_nama}}</td>
                    <td>{{ $du->hubungan_keluarga_nama}}</td>
                    <td>{{ $du->umat_buku_baptis}}</td>
                    <td>{{ $du->agama_nama}}</td>
                    <td>{{ $du->umat_handphone}}</td>
                    <td>{{ $du->narasi}}</td>
                    @if($du->umat_meninggal === 1)
                        <td>Meniggal</td>
                    @else
                        <td>-</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>