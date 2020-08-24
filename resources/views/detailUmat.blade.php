@extends('layouts/app')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

@section('content')
<div class="container">
            <h1 class="mt-2">Detail Umat</h1>
                <div class="row">
                    <div class="col-6">
                        <div class="card border-danger">
                            <div class="card-body">
                                <h5 class="card-title">Informasi Pribadi</h5>
                                 @foreach( $umat_nama as $dup )
                                         <li class="list-group">Nama Lengkap: {{ $dup->umat_nama}}</li>
                                         <li class="list-group">NIK: {{ $dup->umat_ktp}}</li>
                                         <li class="list-group">Nomor KK: {{ $dup->umat_kk}}</li>
                                         <li class="list-group">Tempat Tanggal Lahir: {{ $dup->umat_tempat_lahir}}, {{ $dup->umat_tanggal_lahir}}</li>
                                         <li class="list-group">Status Nikah: {{ $dup->status_nikah_nama}}</li>
                                         <li class="list-group">Hubungan Keluarga {{ $dup->hubungan_keluarga_nama}}</li>
                                         <li class="list-group">Status Rumah: {{ $dup->status_rumah_nama}}</li>
                                         <li class="list-group">Pendidikan: {{ $dup->pendidikan_nama}}</li>
                                         <li class="list-group">Golongan Darah: {{ $dup->golongan_darah_nama}}</li>
                                         @if($dup->umat_jenis_kelamin === 1)
                                            <li class="list-group">Jenis Kelamin: Perempuan</li>
                                         @else
                                            <li class="list-group">Jenis Kelamin: Laki-Laki</li>
                                         @endif
                                         <li class="list-group">Alamat: {{ $dup->umat_alamat}}</li>
                                         <li class="list-group">Kabupaten/Kota: {{ $dup->umat_kota_kab}}</li>
                                         <li class="list-group">Kecamatan: {{ $dup->umat_kecamatan}}</li>
                                         <li class="list-group">Kelurahan: {{ $dup->umat_kelurahan}}</li>
                                         <li class="list-group">Nomor Telepon: {{ $dup->umat_handphone}}</li>
                                         <li class="list-group">Email: {{ $dup->umat_email}}</li>
                                         <li class="list-group">Jurusan: {{ $dup->umat_jurusan}}</li>
                                         <li class="list-group">Profesi: {{ $dup->profesi_nama}}</li>
                                         <li class="list-group">Pekerjaan: {{ $dup->pekerjaan_nama}}</li>
                                         <li class="list-group">Keterampilan: {{ $dup->umat_keterampilan}}</li>
                                         <li class="list-group">Status Aktivitas Sosial: {{ $dup->status_aktivitas_sosial_nama}}</li>
                                         <li class="list-group">Disabilitas: {{ $dup->tuna_nama}}</li>
                                         <li class="list-group">Penghasilan: {{ $dup->penghasilan}}</li>
                                         <li class="list-group">Narasi: {{ $dup->narasi}}</li>       
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-danger">
                            <div class="card-body">
                                <h5 class="card-title">Informasi Gerejawi</h5>
                                 @foreach( $umat_nama as $dup )
                                         <li class="list-group">Nama Baptis: {{ $dup->umat_nama_baptis}}</li>
                                         <li class="list-group">Nomor Buku Baptis: {{ $dup->umat_buku_baptis}}</li>
                                         <li class="list-group">Nomor Baptis: {{ $dup->umat_nomer_baptis}}</li>
                                         <li class="list-group">Keuskupan Baptis: {{ $dup->keuskupan_nama}}</li>
                                         <li class="list-group">Paroki Baptis: {{ $dup->paroki_nama}}</li>
                                         <li class="list-group">Suku: {{ $dup->suku_nama}}</li>
                                         <li class="list-group">Status Ekonomi: {{ $dup->status_ekonomi_nama}}</li>
                                         <li class="list-group">Agama: {{ $dup->agama_nama}}</li>
                                         <li class="list-group">Kevikepan: {{ $dup->kevikepan_nama}}</li>
                                         <li class="list-group">Paroki: {{ $dup->paroki_nama}}</li>
                                         <li class="list-group">Wilayah: {{ $dup->wilayah_nama}}</li>
                                         <li class="list-group">Lingkungan: {{ $dup->lingkungan_nama}}</li>
                                         @if($dup->umat_meninggal === 1)
                                            <li class="list-group">Status Meninggal: Meninggal</li>
                                         @else
                                            <li class="list-group">Status Meninggal: Belum Meninggal</li>
                                         @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                <div class="col-6 mb-3">
                <div class="card border-light"></div>
                <div class="card border-light"></div>
                <div class="card border-light"></div>
                <div class="card border-light"></div>
                <div class="card border-light"></div>
                <div class="card border-light"></div>
                    <div class="card border-danger">
                        <div class="card-body">
                            <h5 class="card-title">Berkas Bukti</h5>
                            <li class="list-group">Tanggal Update: {{ $dup->tgl_update}}</li>
                            <img src="{{ asset('/storage/Foto/Laura-laura@example.com/Foto Profil - Laura.jpg' }}" class="img-thumbnail" alt="Responsive image">
                            <a href=""  name="Upload" id=""><button type="button" class="btn btn-danger">Upload</button></a>
                            <a href=""  name="Upload" id=""><button type="button" class="btn btn-danger">Upload</button></a>
                            <a href=""  name="Upload" id=""><button  type="button" class="btn btn-danger">Upload</button></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection