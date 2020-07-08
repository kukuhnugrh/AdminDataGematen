@extends('layouts/app')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Daftar Umat</h1>
            <label for="name" class=" col-form-label"><b>Lingkungan</b></label>
            
            <div id="container-table table-responsive">
                <table class="table">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group row">
                                <div class="col-sm-9">
                                    <select name="Lingkungan" id="Lingkungan" class="form-control input-lg" required>
                                        <option value="0">== Pilih Lingkungan ==</option>
                                        @foreach( $dataLingkungan as $dl )
                                            <option value="{{ $dl->lingkungan_id }}">{{ $dl->lingkungan_nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <a href="dataUmat/PDF/0" target="_blank" name="Export" id="Export"><button type="button" class="btn btn-primary">Export to PDF</button></a>
                                </div>
                            </div>
                        </div>
                        <div  class="col-sm-3">
                            <nav aria-label="Page navigation example">
                                {{ $dataUmat->links() }}
                            </nav>
                        </div>
                    </div>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nomor KK</th>
                            <th scope="col">Nama Umat</th>
                            <th scope="col">Hubungan Keluarga</th>
                            <th scope="col">Buku Baptis</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Nomor Handphone</th>
                            <th scope="col">Narasi</th>
                            <th scope="col">Status Meninggal</th>
                        </tr>
                    </thead>
                    <tbody id="daftarUmatLingkungan">
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
                                    <td>Meninggal</td>
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
@section('js')
<script>
    $(document).ready(function(){
        $('select[name=Lingkungan]').on('change', function(){
            var LingkunganID = $(this).val();
            document.getElementById('Export').setAttribute("href", "dataUmat/PDF/"+LingkunganID);
            $.ajax({
                url: '/dataUmat/'+LingkunganID,
                type: "GET",
                dataType: "json",
                success:function(data){
                    var i = 1;
                    $('#daftarUmatLingkungan').empty();
                    $.each(data, function(key, value){
                        var meninggal = "";
                        if(value.umat_meninggal == 1){
                            var meninggal = "Meninggal"
                        }else{
                            var meninggal = "-"
                        }
                        $('#daftarUmatLingkungan').append("<tr><td scope='row'>"+i+
                            "</td><td>"+value.umat_kk+
                            "</td><td>"+value.umat_nama+
                            "</td><td>"+value.hubungan_keluarga_nama+
                            "</td><td>"+value.umat_buku_baptis+
                            "</td><td>"+value.agama_nama+
                            "</td><td>"+value.umat_handphone+
                            "</td><td>"+value.narasi+
                            "</td><td>"+meninggal+"</td></tr>");
                            
                            i++;
                    });
                }
            });
        });
    });
</script>
@endsection