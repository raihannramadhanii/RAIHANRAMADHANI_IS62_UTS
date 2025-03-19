@extends('layout.master')
@section('title')
    Data Penitip
@endsection
@section('nm_hal')
Data Penitip
@endsection

@section('penitip', 'active')

@section('konten')

<div class="container table-container">
    <span class="float-end"><a href="/form-penitip" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i>Tambah Data </a></span>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Pendaftaran</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>No HP</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>12345</td>
                <td>Raihan Chantika</td>
                <td>Mibo City</td>
                <td>08123456</td>
            </tr>
            <tr>
                <td>1</td>
                <td>86760</td>
                <td>Putri Nabilah</td>
                <td>Ketapang</td>
                <td>086457756</td>
            </tr>
            <tr>
                <td>1</td>
                <td>77545</td>
                <td>Maharani Erfina</td>
                <td>Lampaseh Kota</td>
                <td>085654766</td>
            </tr>
            <tr>
                <td>1</td>
                <td>454455</td>
                <td>Aulia Safda</td>
                <td>Lambaro</td>
                <td>08778677</td>
            </tr>
            <tr>
                <td>1</td>
                <td>187879008</td>
                <td>Dinisaurus</td>
                <td>Neusu</td>
                <td>086785787</td>
            </tr>
            <!-- Baris tambahan bisa ditambahkan di sini -->
        </tbody>
    </table>
</div>

@endsection
