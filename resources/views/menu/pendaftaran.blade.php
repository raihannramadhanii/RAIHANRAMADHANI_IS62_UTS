@extends('layout.master')
@section('title')
    Pendaftaran
@endsection

@section('pendaftaran', 'active')

@section('konten')

<div class="container mt-5">
    <h2 class="text-center mb-4">Form Pendaftaran</h2>
    <form action="method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Alamat</label>
            <input type="email" class="form-control" id="alamat" name="alamat" required>
        </div>

        <div class="form-group">
            <label for="password">No Hp</label>
            <input type="text" class="form-control" id="hp" name="hp" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
    </form>
</div>

@endsection

