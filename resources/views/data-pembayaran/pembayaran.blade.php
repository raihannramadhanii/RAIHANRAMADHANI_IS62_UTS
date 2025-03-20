@extends('layout.master')
@section('title')
    Data Pembayaran
@endsection
@section('nm_hal')
Data Pembayaran
@endsection

@section('pembayaran', 'active')

@section('konten')

<div class="container table-container">
    <span class="float-end mb-5"><a href="/form-pembayaran" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i>Tambah Data </a></span>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Pembayaran</th>
                <th>Kode Penjualan</th>
                <th>Total Pembayaran</th>
                <th>Jenis Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>006768</td>
                <td>R20</td>
                <td>Rp.16.000,-</td>
                <td>Cash</td>
            </tr>
            <tr>
                <td>2</td>
                <td>587789</td>
                <td>T30</td>
                <td>Rp.26.000,-</td>
                <td>Cash</td>
            </tr>
            <tr>
                <td>3</td>
                <td>424565</td>
                <td>CG25</td>
                <td>Rp.21.000,-</td>
                <td>Transfer</td>
            </tr>
            <tr>
                <td>4</td>
                <td>007878</td>
                <td>OND30</td>
                <td>Rp.26.000,-</td>
                <td>Transfer</td>
            </tr>
            <tr>
                <td>5</td>
                <td>672354</td>
                <td>PSC20</td>
                <td>Rp.16.000,-</td>
                <td>Cash</td>
            </tr>
            <!-- Baris tambahan bisa ditambahkan di sini -->
        </tbody>
    </table>
</div>

@endsection
