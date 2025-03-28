@extends('layout.master')
@section('title')

@endsection

@section('penitip', 'active')

@section('konten')

<style>
    .custom-hr {
        border-top: solid black;
        width: 20%; /* You can adjust the width of the line */
        margin: 0 auto; /* Centers the line */
        margin-top: -15px; /* Adjust this value to raise the line */
    }

    .form-section {
        margin-top: 30px; /* Adjust this value to control the space above the form */
    }
</style>


<div class="container mt-5">
    <button><a href="beranda"><i class="fa-solid fa-arrow-left"></i></a></button>
    <h2 class="text-center mb-4">
        Form Penitip</h2>
    <hr class="custom-hr">

    <div class="form-section"> <!-- Added div with class "form-section" -->
        <form action="" method="POST">
            @csrf

            <div class="form-group" style="margin-top: 30px;" style="margin-bottom: 25px;">
                <label for="name">ID Pendaftaran</label>
                <input type="text" class="form-control" style="margin-top: 15px;" id="id" name="id" required>
            </div>

            <div class="form-group" style="margin-top: 30px;" style="margin-bottom: 25px;">
                <label for="email">Nama Lengkap</label>
                <input type="text" class="form-control" style="margin-top: 15px;" id="name" name="name" required>
            </div>

            <div class="form-group" style="margin-top: 30px; margin-bottom: 30px;">
                <label for="password">Alamat</label>
                <input type="text" class="form-control" style="margin-top: 15px;" id="name" name="name" required>
            </div>

            <div class="form-group" style="margin-top: 30px; margin-bottom: 30px;">
                <label for="password">No Hp</label>
                <input type="text" class="form-control" style="margin-top: 15px;" id="hp" name="hp" required>
            </div>

            <div class="d-grid gap-2 col-4 mx-auto" style="margin-top: 40px;">
                <button class="btn btn-primary"><a class="nav-link" href="/penitip" type="button">Kirim</a></button>
            </div>



        </form>
    </div>
</div>


@endsection

