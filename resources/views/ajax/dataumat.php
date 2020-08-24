<?php
    use Illuminate\Support\Facades\DB;

    $keyword = $_GET["keyword"];
    $dataUmat = DB::table('umat')
                    ->join('hubungan_keluarga', 'umat.umat_hubungan_keluarga', '=', 'hubungan_keluarga.hubungan_keluarga_id')
                    ->join('agama', 'umat.umat_agama', '=', 'agama.agama_id')
                    ->where('umat_lingkungan_id', $keyword)
                    ->orderBy('umat_kk', 'ASC')->orderBy('hubungan_keluarga_id', 'DESC')->get();
?>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nomor KK</th>
            <th scope="col">Nama Umat</th>
            <th scope="col">Hubungan Keluarga</th>
            <th scope="col">Buku Baptis</th>
            <th scope="col">Agama</th>
            <th scope="col">Nomoer Handphone</th>
            <th scope="col">Narasi</th>
            <th scope="col">Status Meninggal</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $dataUmat as $du )
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
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