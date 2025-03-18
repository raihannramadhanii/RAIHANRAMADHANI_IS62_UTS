@extends('layout.master')
@section('title')
    Menu
@endsection

@section('menu', 'active')

@section('konten')

    <div class="container text-align" style="margin-top: 100px; margin-left: 500px;" >
        <div class="row flex-column align-items-start">
            <div class="col-4 flex-column mb-3">
                <div class="p-3 border rounded" style="font-size: 23px;"> <a href:/pendaftaran> Pendaftaran </a></div>
            </div>
            <div class="col-4 flex flex-column mb-3">
                <div class="p-3 border rounded" style="font-size: 23px;">Form Penitipan</div>
            </div>
            <div class="col-4 flex-column mb-3">
                <div class="p-3 border rounded" style="font-size: 23px;">Form Makanan</div>
            </div>
            <div class="col-4 flex flex-column mb-3">
                <div class="p-3 border rounded" style="font-size: 23px;">Form Pembayaran</div>
            </div>
            </div>
        </div>
    </div>

@endsection
