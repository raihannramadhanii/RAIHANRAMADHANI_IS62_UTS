@extends('layout.master')
@section('title')
    Beranda
@endsection

@section('beranda', 'active')

@section('konten')
<div class="card text-bg-dark">
    <img src="image/jajanan.jpeg" class="card-img" alt="...">
    <div class="card-img-overlay">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small>Last updated 3 mins ago</small></p>
    </div>
</div>
{{-- <div class="card text-bg-dark">
    <img src="image/jajanan.jpeg" class="card-img" alt="...">
    <div class="card-img-overlay d-flex justify-content-start align-items-center">
        <div class="text-left">
            <h5 class="card-title">Jajanan</h5>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati explicabo minus deserunt odio incidunt laudantium voluptatum saepe, quis quas cum perferendis ullam provident unde minima molestias, quae totam voluptate et!</p>
            <p class="card-text"><small>. Nulla unde quas ipsum dolore saepe delectus aliquid sequi ea quod cumque dolorem tempore blanditiis, aspernatur eos fugiat quidem error quos alias!</small></p>
        </div>
    </div>
</div> --}}

@endsection
