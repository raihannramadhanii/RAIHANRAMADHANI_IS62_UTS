@extends('layout.master')
@section('title')
    Data Penjualan
@endsection
@section('nm_hal')
Data Penjualan
@endsection

@section('penjualan', 'active')

@section('konten')

<div class="container table-container">
    <span class="float-end mb-5"><a href="/form-penjualan" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i>Tambah Data </a></span>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Penjualan</th>
                <th>ID Penitipan</th>
                <th>Tgl Transaksi</th>
                <th>Jumlah Penjualan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>R20</td>
                <td>12345</td>
                <td>01/01/2025</td>
                <td>20 Pcs</td>
                <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>T30</td>
                <td>86760</td>
                <td>01/01/2025</td>
                <td>30 Pcs</td>
                <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>CG25</td>
                <td>77545</td>
                <td>01/01/2025</td>
                <td>25 Pcs</td>
                <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>OND30</td>
                <td>454455</td>
                <td>02/02/2025</td>
                <td>30 Pcs</td>
                <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>PSC20</td>
                <td>18787</td>
                <td>02/02/2025</td>
                <td>20 Pcs</td>
                <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
            </tr>
            <!-- Baris tambahan bisa ditambahkan di sini -->
        </tbody>
    </table>
</div>

@endsection
