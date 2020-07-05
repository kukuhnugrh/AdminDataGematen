@extends('layout/main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Daftar Umat</h1>

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
                    <tr>
                        <td scope="row">1</td>
                        <td>123</td>
                        <td>aaa</td>
                        <td>678</td>
                        <td>1234</td>
                        <td>sgsddgazdvcasdfs</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection