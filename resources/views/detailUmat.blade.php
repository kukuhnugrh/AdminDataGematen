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
                                         <div class="row">
                                            <div class="col-4 w-25">Nama Lengkap </div>
                                            <li class="list-group col-4">: {{ $dup->umat_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">NIK </div>
                                            <li class="list-group">: {{ $dup->umat_ktp}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Nomor KK </div>
                                            <li class="list-group">: {{ $dup->umat_kk}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Tempat Tanggal Lahir </div>
                                            <li class="list-group">: {{ $dup->umat_tempat_lahir}}, {{ $dup->umat_tanggal_lahir}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Status Nikah </div>
                                            <li class="list-group">: {{ $dup->status_nikah_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Hubungan Keluarga </div>
                                            <li class="list-group">: {{ $dup->hubungan_keluarga_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Status Rumah</div>
                                            <li class="list-group">: {{ $dup->status_rumah_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Pendidikan</div>
                                            <li class="list-group">: {{ $dup->pendidikan_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Golongan Darah </div>
                                            <li class="list-group">: {{ $dup->golongan_darah_nama}}</li>
                                         </div> 
                                         @if($dup->umat_jenis_kelamin === 1)
                                            <div class="row">
                                                <div class="col-4 w-25">Jenis Kelamin </div>
                                                <li class="list-group">: Perempuan</li>
                                            </div>
                                         @else
                                            <div class="row">
                                                <div class="col-4 w-25">Jenis Kelamin </div>
                                                <li class="list-group">: Laki-laki</li>
                                            </div>
                                         @endif
                                         <div class="row">
                                            <div class="col-4 w-25">Alamat</div>
                                            <li class="list-group">: {{ $dup->umat_alamat}}</li>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 w-25">Kabupaten/Kota</div>
                                            <li class="list-group">: {{ $dup->umat_kota_kab}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Kecamatan</div>
                                            <li class="list-group">: {{ $dup->umat_kecamatan}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Kelurahan</div>
                                            <li class="list-group">: {{ $dup->umat_kelurahan}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Nomor Telepon</div>
                                            <li class="list-group">: {{ $dup->umat_handphone}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Email</div>
                                            <li class="list-group">: {{ $dup->umat_email}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Jurusan</div>
                                            <li class="list-group">: {{ $dup->umat_jurusan}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Profesi</div>
                                            <li class="list-group">: {{ $dup->profesi_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Pekerjaan</div>
                                            <li class="list-group">: {{ $dup->pekerjaan_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Keterampilan</div>
                                            <li class="list-group">: {{ $dup->umat_keterampilan}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Status Aktivitas Sosial</div>
                                            <li class="list-group">: {{ $dup->status_aktivitas_sosial_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Disabilitas</div>
                                            <li class="list-group">: {{ $dup->tuna_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Penghasilan</div>
                                            <li class="list-group">: {{ $dup->penghasilan}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Narasi</div>
                                            <li class="list-group">: {{ $dup->narasi}}</li>       
                                        </div>
                                         @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-danger">
                            <div class="card-body">
                                <h5 class="card-title">Informasi Gerejawi</h5>
                                 @foreach( $umat_nama as $dup )
                                        <div class="row">
                                            <div class="col-4 w-25">Nama Baptis</div>
                                            <li class="list-group">: {{ $dup->umat_nama_baptis}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Nomor Buku Baptis</div>
                                            <li class="list-group">: {{ $dup->umat_buku_baptis}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Nomor Baptis</div>
                                            <li class="list-group">: {{ $dup->umat_nomer_baptis}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Keuskupan Baptis</div>
                                            <li class="list-group">: {{ $dup->keuskupan_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Paroki Baptis</div>
                                            <li class="list-group">: {{ $dup->paroki_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Suku</div>
                                            <li class="list-group">: {{ $dup->suku_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Status Ekonomi</div>
                                            <li class="list-group">: {{ $dup->status_ekonomi_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Agama</div>
                                            <li class="list-group">: {{ $dup->agama_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Kevikepan</div>
                                            <li class="list-group">: {{ $dup->kevikepan_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Paroki</div>
                                            <li class="list-group">: {{ $dup->paroki_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Wilayah</div>
                                            <li class="list-group">: {{ $dup->wilayah_nama}}</li>
                                         </div>
                                         <div class="row">
                                            <div class="col-4 w-25">Lingkungan</div>
                                            <li class="list-group">: {{ $dup->lingkungan_nama}}</li>
                                         </div>
                                         @if($dup->umat_meninggal === 1)
                                            <div class="row">
                                                <div class="col-4 w-25">Status Meninggal</div>
                                                <li class="list-group">: Meninggal</li>
                                            </div>
                                        @else
                                            <div class="row">
                                                <div class="col-4 w-25">Status Meninggal</div>
                                                <li class="list-group">: Meninggal</li>
                                            </div>
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
                                <div class="row">
                                    <div class="col-4 w-25">Tanggal Update</div>
                                    <li class="list-group">: {{ $dup->tgl_update}}</li>
                                </div>
                            <!-- <a href=""  name="Upload" id=""><button type="button" class="btn btn-danger">Upload</button></a>
                            <a href=""  name="Upload" id=""><button type="button" class="btn btn-danger">Upload</button></a>
                            <a href=""  name="Upload" id=""><button  type="button" class="btn btn-danger">Upload</button></a> -->
                        </div>
                    </div>
            </div>
        </div>
        <div class="mt-2">
                <a href="'//" name="Edit" id="Edit"><button type="button" class="btn btn-primary">Edit</button></a>
            </div>
    </div>
</div>
@endsection