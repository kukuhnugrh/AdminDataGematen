@extends('layout/main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Daftar Umat</h1>
            <div class="input-group mb-3 mr-2">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lingkungan
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        @foreach( $dataLingkungan as $dl )
                        <button class="dropdown-item" type="button">{{ $dl->lingkungan_nama}}</button>
                        @endforeach
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-primary">Export to PDF</button>
                </div>
            </div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
						<th scope="col">Nomor KK</th>
						<th scope="col">Nama Umat</th>
						<th scope="col">Nomor Telepon</th>
						<th scope="col">Narasi</th>
						<th scope="col">Penghasilan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $dataUmat as $du )
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $du->umat_kk}}</td>
                        <td>{{ $du->umat_nama}}</td>
                        <td>{{ $du->umat_handphone}}</td>
                        <td>{{ $du->narasi}}</td>
                        <td>{{ $du->penghasilan}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection