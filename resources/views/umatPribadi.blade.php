@extends('layouts/app')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Daftar Umat Pribadi</h1>
            <div id="container-table table-responsive">
                <table class="table">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="input-group">              
                                <div class="input-group-prepend col+6">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Nama umat: </span>
                                </div>
                                <input type="text" name="cariUmat" id="cariUmat" placeholder="Cari Nama Umat" class="form-control col-md-5" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <div  class="col-sm-3">
                            <nav aria-label="Page navigation example">
                                {{ $dataUmatPribadi->links() }}
                            </nav>
                        </div>
                    </div>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nomor KK</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama Umat</th>
                            <th scope="col">Detail</th>
                        </tr>
                    </thead>
                    <tbody id="daftarUmatPribadi">
                        @foreach( $dataUmatPribadi as $dup )
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $dup->umat_kk}}</td>
                                <td>{{ $dup->umat_ktp}}</td>
                                <td>{{ $dup->umat_nama}}</td>
                                <td><a href='/detailUmat/{{ $dup->umat_nama }}' class="badge badge-danger">Detail</a></td>
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
        $('input[name=cariUmat]').on('keyup', function(){
            var keyword = $(this).val();
            $.ajax({
                url: '/umatPribadi/livesearch/'+keyword,
                type: "GET",
                dataType: "json",
                success:function(data){
                    var i = 1;
                    $('#daftarUmatPribadi').empty();
                    $.each(data, function(key, value){
                        $('#daftarUmatPribadi').append("<tr><td scope='row'>"+i+
                            "</td><td>"+value.umat_kk+
                            "</td><td>"+value.umat_ktp+
                            "</td><td>"+value.umat_nama+
                            "</td><td><a href='/detailUmat/"+value.umat_nama+"' class='badge badge-danger'>Detail</a></td></tr>");
                            i++;
                    });
                }
            });
        });
    });
</script>
@endsection