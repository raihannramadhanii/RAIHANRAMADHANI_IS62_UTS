@extends('layout.master')
@section('title')
    Data Penitipan
@endsection
@section('nm_hal')
Data Penitipan
@endsection

@section('penitipan', 'active')

@section('konten')

<div class="container table-container">
    <span class="float-end"><a href="/form-penitipan" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i>Tambah Data </a></span>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Penitipan</th>
                <th>Jumlah Penitipan</th>
                <th>Kode Makanan</th>
                <th>Nama Makanan</th>
                <th>Harga Makanan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>12345</td>
                <td>20 Pcs</td>
                <td>KB-R1</td>
                <td>Risol</td>
                <td>Rp.3.000,-</td>
            </tr>
            <tr>
                <td>2</td>
                <td>86760</td>
                <td>30 Pcs</td>
                <td>KB-T1</td>
                <td>Tempe</td>
                <td>Rp.2000,-</td>
            </tr>
            <tr>
                <td>3</td>
                <td>77545</td>
                <td>25 Pcs</td>
                <td>CG</td>
                <td>Canai Gula</td>
                <td>Rp.2500,-</td>
            </tr>
            <tr>
                <td>4</td>
                <td>454455</td>
                <td>30 Pcs</td>
                <td>OND</td>
                <td>Onde-Onde</td>
                <td>Rp.1000,-</td>
            </tr>
            <tr>
                <td>5</td>
                <td>18787</td>
                <td>20 Pcs</td>
                <td>PSC</td>
                <td>Pisang Coklat</td>
                <td>Rp.2000,-</td>
            </tr>
            <!-- Baris tambahan bisa ditambahkan di sini -->
        </tbody>
    </table>
</div>

@endsection
