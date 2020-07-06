@extends('layout/main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Daftar Umat</h1>
            <div>
                <a href=""><button type="button" class="btn btn-primary">Export to PDF</button></a>
            </div>
            <label for="name" class=" col-form-label"><b>Lingkungan</b></label>
            <form>
                <div class="form-group row">
                    <div class="col-md-6">
                        <select name="Lingkungan" id="Lingkungan" class="form-control input-lg" data-dependent="tabel_umat">
                            <option value="">== Pilih Lingkungan ==</option>
                            @foreach( $dataLingkungan as $dl )
                                <option value="{{ $dl->lingkungan_id }}">{{ $dl->lingkungan_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </div>
                </div>
            </form>
            <div id="container-table">
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
                    <tbody id="daftarUmatWilayah">
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
            </div>
        </div>
    </div>
</div>
@endsection